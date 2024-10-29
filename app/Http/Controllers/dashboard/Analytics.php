<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;

class Analytics extends Controller
{
  public function index()
  {
    $bph = Anggota::where('status', 'BPH')->get();
    $anggota_muda = Anggota::where('status', 'Anggota Muda')->get();
    $calon_anggota = Anggota::where('status', 'Calon Anggota')->get();
    $total_anggota = Anggota::get();

    return view('content.dashboard.dashboards-analytics', [
      'bph' => $bph,
      'amd' => $anggota_muda,
      'total' => $total_anggota,
      'calon_anggota' => $calon_anggota
    ]);
  }
  public function anggota()
  {
    return view('layouts.anggota');
  }
  public function calon()
  {
    return view('layouts.calon-anggota');
  }
  public function add_anggota(Request $request)
  {
    try {

      // Cek apakah email sudah terdaftar
      $existingEmail = Anggota::where('email', $request->email)->first();
      if ($existingEmail) {
        $nama = $existingEmail->nama; // Ambil nama user
        return redirect()->back()->with('error', 'Email sudah terdaftar. Dengan Nama : ' . $nama);
      }

      // Validate request data
      $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'jkel' => 'required',
        'alamat' => 'required|string|max:255',
        'email' => 'required|email|unique:anggota,email',
        'no_tlp' => 'required',
        'tgl_lahir' => 'required|date',
        'angkatan' => 'required|integer',
        'patondro' => 'nullable|string',
        'nra' => 'nullable|string',
        'jkarir' => 'nullable|string',
        'jabatan' => 'nullable|string',
        'status' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15048',
      ]);

      // Handle file upload if exists
      if ($request->hasFile('gambar')) {
        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/anggota'), $fileName);
        $validatedData['gambar'] = $fileName; // Save file name in database
      } else {
        // If no file is uploaded, ensure 'gambar' is not in the validated data array
        $validatedData['gambar'] = null;
      }

      // Create new Anggota
      Anggota::create($validatedData);

      // Redirect to BPH table with success message
      return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Data gagal di tambahkan (pastikan data anda benar), Dan Coba Lagi!.');
    }
  }
}
