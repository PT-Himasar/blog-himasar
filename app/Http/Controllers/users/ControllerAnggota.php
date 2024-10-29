<?php

namespace App\Http\Controllers\users;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Anggota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerAnggota extends Controller
{
  public function bph(Request $request)
  {
    $bph = Anggota::where('status', 'BPH')->orderBy('created_at', 'DESC')->get();
    // Mengecek apakah ada data
    if ($bph->isEmpty()) {
      // Mengalihkan ke halaman tabel-bph dengan pesan jika tidak ada data calon anggota
      return redirect()->back()->with('error', 'Tidak Ada Badan Pengurus Harian');
    }
    return view('content.users.tabel-bph', [
      'data_bph' => $bph
    ]);
  }

  public function store_anggota(Request $request)
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
        'patondro' => 'required',
        'nra' => 'nullable|string',
        'jkarir' => 'nullable|string',
        'jabatan' => 'required|string',
        'status' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
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
      return redirect()->back()->with('error', 'Data gagal di tambahkan. Coba lagi!.');
    }
  }

  public function update_anggota(Request $request, Anggota $id)
  {
    try {
      // Validasi data request
      $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'jkel' => 'required',
        'alamat' => 'required|string|max:255',
        'email' => 'required|email|unique:anggota,email,' . $id->id,
        'no_tlp' => 'required',
        'tgl_lahir' => 'required|date',
        'angkatan' => 'required|integer',
        'patondro' => 'required',
        'nra' => 'nullable|string',
        'jkarir' => 'nullable|string',
        'jabatan' => 'required|string',
        'status' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
      ]);

      // Penanganan upload file jika ada
      if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($id->gambar && file_exists(public_path('assets/img/anggota/' . $id->gambar))) {
          unlink(public_path('assets/img/anggota/' . $id->gambar));
        }

        // Simpan gambar baru
        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/anggota'), $fileName);
        $validatedData['gambar'] = $fileName;
      } else {
        // Hapus gambar dari array jika tidak ada gambar baru diunggah
        unset($validatedData['gambar']);
      }

      // Perbarui model Anggota
      $id->fill($validatedData)->save();

      return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Data gagal diperbarui. Coba lagi!.');
    }
  }


  public function destroy_anggota($id)
  {
    try {
      // Temukan data anggota berdasarkan ID
      $anggota = Anggota::findOrFail($id);

      // Hapus gambar jika ada
      if ($anggota->gambar) {
        $gambarPath = public_path('assets/img/anggota/' . $anggota->gambar);
        if (file_exists($gambarPath)) {
          unlink($gambarPath);
        }
      }

      // Hapus data anggota dari database
      $anggota->delete();

      // Redirect dengan pesan sukses
      return redirect()->back()->with('hapus', 'Data berhasil dihapus!');
    } catch (\Exception $e) {
      // Redirect dengan pesan error jika ada masalah
      return redirect()->back()->with('error', 'Data gagal dihapus. Coba lagi!');
    }
  }


  public function amd(Request $request)
  {
    $amd = Anggota::where('status', 'Anggota Muda')->orderBy('created_at', 'DESC')->get();
    // Mengecek apakah ada data
    if ($amd->isEmpty()) {
      // Mengalihkan ke halaman tabel-bph dengan pesan jika tidak ada data calon anggota
      return redirect()->back()->with('error', 'Tidak Ada Anggota Muda');
    }
    return view('content.users.tabel-amd', [
      'data_amd' => $amd
    ]);
  }

  public function demisioner(Request $request)
  {
    $demisioner = Anggota::where('status', 'Anggota Lepas')->orderBy('created_at', 'DESC')->get();
    return view('content.users.tabel-demisioner', [
      'data_demisioner' => $demisioner
    ]);
  }
  public function mantum(Request $request)
  {
    $mantum = Anggota::where('jkarir', 'like', '%ketua umum himasar%')
      ->orderBy('created_at', 'DESC')
      ->get();
    return view('content.users.tabel-mantum', [
      'data_mantum' => $mantum
    ]);
  }

  public function calon_anggota()
  {
    // Mengambil data calon anggota
    $calon_anggota = Anggota::where('status', 'Calon Anggota')->orderBy('created_at', 'DESC')->get();

    // Mengecek apakah ada data
    if ($calon_anggota->isEmpty()) {
      // Mengalihkan ke halaman tabel-bph dengan pesan jika tidak ada data calon anggota
      return redirect()->back()->with('error', 'Tidak Ada  Calon Anggota');
    }

    return view('content.users.tabel-calon-anggota', [
      'data_calon' => $calon_anggota
    ]);
  }
}
