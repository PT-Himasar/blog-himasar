<?php

namespace App\Http\Controllers\himasar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\News;
use Illuminate\Support\Str;

class ControllerStructure extends Controller
{
  public function structure(Request $request)
  {
    // Mengambil data anggota berdasarkan jabatan tertentu dan simpan ke variabel
    $dpo = Anggota::where('jabatan', 'DPO')->orderBy('created_at', 'DESC')->get();
    $staf_dpo = Anggota::where('jabatan', 'Staf DPO')->orderBy('created_at', 'DESC')->get();
    $ketua = Anggota::where('jabatan', 'Ketua')->orderBy('created_at', 'DESC')->get();
    $wakil_ketua = Anggota::where('jabatan', 'Wakil Ketua')->orderBy('created_at', 'DESC')->get();
    $sekretaris = Anggota::where('jabatan', 'Sekretaris')->orderBy('created_at', 'DESC')->get();
    $bendahara = Anggota::where('jabatan', 'Bendahara')->orderBy('created_at', 'DESC')->get();
    $koordinator_pengkaderan = Anggota::where('jabatan', 'Kordinator Pengkaderan')->orderBy('created_at', 'DESC')->get();
    $koordinator_pembelajaran = Anggota::where('jabatan', 'Kordinator Pembelajaran')->orderBy('created_at', 'DESC')->get();
    $koordinator_humas = Anggota::where('jabatan', 'Kordinator Humas')->orderBy('created_at', 'DESC')->get();
    $koordinator_kesekretariatan = Anggota::where('jabatan', 'Kordinator Kesekretariatan')->orderBy('created_at', 'DESC')->get();
    $wakil_koordinator_pengkaderan = Anggota::where('jabatan', 'Wakil Kordinator Pengkaderan')->orderBy('created_at', 'DESC')->get();
    $wakil_koordinator_pembelajaran = Anggota::where('jabatan', 'Wakil Kordinator Pembelajaran')->orderBy('created_at', 'DESC')->get();
    $wakil_koordinator_humas = Anggota::where('jabatan', 'Wakil Kordinator Humas')->orderBy('created_at', 'DESC')->get();
    $wakil_koordinator_kesekretariatan = Anggota::where('jabatan', 'Wakil Kordinator Kesekretariatan')->orderBy('created_at', 'DESC')->get();
    $staf_pengkaderan = Anggota::where('jabatan', 'Staf Pengkaderan')->orderBy('created_at', 'DESC')->get();
    $staf_pembelajaran = Anggota::where('jabatan', 'Staf Pembelajaran')->orderBy('created_at', 'DESC')->get();
    $staf_humas = Anggota::where('jabatan', 'Staf Humas')->orderBy('created_at', 'DESC')->get();
    $staf_kesekretariatan = Anggota::where('jabatan', 'Staf Kesekretariatan')->orderBy('created_at', 'DESC')->get();

    return view('pages.team', compact(
      'dpo',
      'staf_dpo',
      'ketua',
      'wakil_ketua',
      'sekretaris',
      'bendahara',
      'koordinator_pengkaderan',
      'koordinator_pembelajaran',
      'koordinator_humas',
      'koordinator_kesekretariatan',
      'wakil_koordinator_pengkaderan',
      'wakil_koordinator_pembelajaran',
      'wakil_koordinator_humas',
      'wakil_koordinator_kesekretariatan',
      'staf_pengkaderan',
      'staf_pembelajaran',
      'staf_humas',
      'staf_kesekretariatan'
    ));
  }

  public function gallery(Request $request)
  {
    $eventall = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->paginate(6);

    return view('pages.gallery', [
      'gallery' => $eventall
    ]);
  }
}
