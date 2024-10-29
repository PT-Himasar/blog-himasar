<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap any application services.
   */

  public function boot(): void
  {
    View::composer('layouts.partials.footer', function ($view) {
      $himasar = User::orderBy('created_at', 'ASC')->first();
      $view->with('himasar', $himasar);
    });
    View::composer('layouts.sections.navbar.navbar', function ($view) {
      $hms = User::orderBy('created_at', 'ASC')->first();
      $view->with('hms', $hms);
    });
  }

  // public function boot(): void
  // {
  //   View::composer('layouts.partials.footer', function ($view) {
  //     $himasar = User::orderBy('created_at', 'ASC')->first();
  //     $view->with('himasar', $himasar);
  //   });
  //   View::composer('layouts.sections.navbar.navbar', function ($view) {
  //     $hms = User::orderBy('created_at', 'ASC')->first();
  //     $view->with('hms', $hms);
  //   });
  //   if (app()->environment('production') || app()->environment('local')) {
  //     URL::forceScheme('https');
  //   }
  // }
}
