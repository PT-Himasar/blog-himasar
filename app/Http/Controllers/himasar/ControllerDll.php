<?php

namespace App\Http\Controllers\himasar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Anggota;
use App\Models\User;

class ControllerDll extends Controller
{
  public function about()
  {
    $himasar = User::orderBy('created_at', 'ASC')->first();
    $sekarang = Carbon::now()->year;
    $tahunAwal = 2011;
    $selisih = $sekarang - $tahunAwal;
    $bph = Anggota::where('status', 'BPH')->get();
    $alumni = Anggota::where('status', 'Anggota Lepas')->get();
    $total_anggota = Anggota::get();

    return view('pages.about', [
      'himasar' => $himasar,
      'bph' => $bph,
      'alumni' => $alumni,
      'total' => $total_anggota,
      'umur' => $selisih
    ]);
  }

  public function contact()
  {
    $himasar = User::orderBy('created_at', 'ASC')->first();
    return view('pages.contact', [
      'himasar' => $himasar
    ]);
  }
}
