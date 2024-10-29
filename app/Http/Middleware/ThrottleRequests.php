<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThrottleRequests
{
  protected $limiter;

  /**
   * Create a new middleware instance.
   *
   * @param  \Illuminate\Cache\RateLimiter  $limiter
   * @return void
   */
  public function __construct(RateLimiter $limiter)
  {
    $this->limiter = $limiter;
  }

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  int  $limit
   * @param  int  $time
   * @return mixed
   */
  public function handle(Request $request, Closure $next, $limit = 60, $time = 1)
  {
    $key = $this->resolveRequestSignature($request);

    if ($this->limiter->tooManyAttempts($key, $limit, $time)) {
      return response()->json([
        'throttleError' => 'Terlalu banyak percobaan login. Silakan coba lagi nanti.'
      ], Response::HTTP_TOO_MANY_REQUESTS);
    }

    $this->limiter->hit($key, $time);

    return $next($request);
  }

  /**
   * Resolve the request signature.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return string
   */
  protected function resolveRequestSignature(Request $request)
  {
    return $request->ip(); // Atau gunakan metode lain untuk membuat signature unik
  }
}
