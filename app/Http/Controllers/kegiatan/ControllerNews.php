<?php

namespace App\Http\Controllers\kegiatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class ControllerNews extends Controller
{
  public function news(Request $request)
  {
    $news = News::where('kategori', 'blog')->orderBy('created_at', 'DESC')->get();

    if ($news->isEmpty()) {
      // Mengalihkan ke halaman tabel-news dengan pesan jika tidak ada data calon anggota
      return redirect()->back()->with('error', 'Tidak Ada data Berita / Blog');
    }

    return view('content.kegiatan.tabel-news', [
      'data_berita' => $news
    ]);
  }

  public function event(Request $request)
  {
    $event = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->get();

    if ($event->isEmpty()) {
      // Mengalihkan ke halaman tabel-event dengan pesan jika tidak ada data calon anggota
      return redirect()->back()->with('error', 'Tidak Ada Postingan Event');
    }

    return view('content.kegiatan.tabel-event', [
      'data_berita' => $event
    ]);
  }

  public function add_news(Request $request)
  {
    try {
      // Validate request data
      $validatedData = $request->validate([
        'kategori' => 'required|string|max:255',
        'judul' => 'required|string|max:255',
        'berita' => 'required',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
      ]);

      // Handle file upload if exists
      if ($request->hasFile('gambar')) {
        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/news'), $fileName);
        $validatedData['gambar'] = $fileName; // Save file name in database
      } else {
        // If no file is uploaded, ensure 'gambar' is not in the validated data array
        $validatedData['gambar'] = null;
      }

      // Create new news
      News::create($validatedData);

      // Redirect to BPH table with success message
      return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Data gagal di tambahkan. Coba lagi!.');
    }
  }


  public function update_news(Request $request, News $id)
  {
    try {
      // Validasi data request
      $validatedData = $request->validate([
        'kategori' => 'required|string|max:255',
        'judul' => 'required|string|max:255',
        'berita' => 'required',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
      ]);
      if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($id->gambar && file_exists(public_path('assets/img/news/' . $id->gambar))) {
          unlink(public_path('assets/img/news/' . $id->gambar));
        }

        // Simpan gambar baru
        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/news'), $fileName);
        $validatedData['gambar'] = $fileName; // Simpan nama file baru ke database
      } else {
        // Jika tidak ada file baru, gunakan gambar lama
        $validatedData['gambar'] = $id->gambar;
      }

      // Perbarui model news
      $id->fill($validatedData)->save();

      return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Berita gagal diperbarui. Coba lagi!.');
    }
  }


  public function destroy_news($id)
  {
    try {
      // Temukan data news berdasarkan ID
      $news = News::findOrFail($id);

      // Hapus gambar jika ada
      if ($news->gambar) {
        $gambarPath = public_path('assets/img/news/' . $news->gambar);
        if (file_exists($gambarPath)) {
          unlink($gambarPath);
        }
      }

      // Hapus data news dari database
      $news->delete();

      // Redirect dengan pesan sukses
      return redirect()->back()->with('hapus', 'Data berhasil dihapus!');
    } catch (\Exception $e) {
      // Redirect dengan pesan error jika ada masalah
      return redirect()->back()->with('error', 'Data gagal dihapus. Coba lagi!');
    }
  }
}
