<?php

namespace App\Http\Controllers\kegiatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proker;

class ControllerProker extends Controller
{
  public function proker(Request $request)
  {
    $proker = Proker::orderByRaw("FIELD(status, 'Comming Soon', 'Terprogram', 'Selesai') ASC")
      ->orderBy('created_at', 'DESC')
      ->get();
    return view('content.kegiatan.tabel-proker', [
      'data_proker' => $proker
    ]);
  }

  public function add_proker(Request $request)
  {
    try {
      // Validate request data
      $validatedData = $request->validate([
        'devisi' => 'required|string|max:255',
        'kegiatan' => 'required',
        'tgl' => 'required|date',
        'status' => 'required',
      ]);

      // Create new proker
      Proker::create($validatedData);

      // Redirect to BPH table with success message
      return redirect()->route('kegiatan-proker')->with('success', 'Data berhasil ditambahkan!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Data gagal di tambahkan. Coba lagi!.');
    }
  }


  public function update_proker(Request $request, Proker $id)
  {
    try {
      // Validasi data request
      $validatedData = $request->validate([
        'devisi' => 'required|string|max:255',
        'kegiatan' => 'required',
        'tgl' => 'required|date',
        'status' => 'required',
      ]);

      // Perbarui model proker
      $id->fill($validatedData)->save();

      return redirect()->route('kegiatan-proker')->with('success', 'Data berhasil diperbarui!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Berita gagal diperbarui. Coba lagi!.');
    }
  }


  public function destroy_proker($id)
  {
    try {
      // Temukan data proker berdasarkan ID
      $proker = Proker::findOrFail($id);

      // Hapus data proker dari database
      $proker->delete();

      // Redirect dengan pesan sukses
      return redirect()->route('kegiatan-proker')->with('hapus', 'Data berhasil dihapus!');
    } catch (\Exception $e) {
      // Redirect dengan pesan error jika ada masalah
      return redirect()->back()->with('error', 'Data gagal dihapus. Coba lagi!');
    }
  }
}
