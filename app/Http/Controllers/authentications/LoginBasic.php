<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    // Cek apakah email dan password valid
    if (Auth::attempt($credentials)) {
      $user = Auth::user();

      // Cek peran pengguna
      if ($user->roles === 'superAdmin') {
        return redirect('/hms');
      }
    }

    // Jika login gagal, kembalikan ke halaman login dengan pesan kesalahan
    return back()->withInput()->withErrors([
      'email' => 'Email atau password anda salah!',
    ]);
  }


  public function logout()
  {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/auth/login');
  }
}
