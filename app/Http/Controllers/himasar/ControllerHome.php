<?php

namespace App\Http\Controllers\himasar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\News;

class ControllerHome extends Controller
{
  public function index(Request $request)
  {
    // Mengambil satu data terbaru kategori 'event'
    $event = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->first();

    // Memformat judul event
    if ($event) {
      $judul = ucwords(strtolower($event->judul));
      $words = explode(' ', $judul);
      $limitedWords = array_slice($words, 0, 5); // Batasi maksimal 5 kata
      $formattedTitle = '';

      foreach (array_chunk($limitedWords, 3) as $chunk) {
        $formattedTitle .= implode(' ', $chunk) . "<br>";
      }

      // Tambahkan "..." di kata terakhir
      if (count($limitedWords) > 0) {
        $formattedTitle = rtrim($formattedTitle, "<br>") . " ...";
      }
    }

    $event->formattedTitle = $formattedTitle;
    // Mengambil semua data kategori 'event' dengan pagination
    $eventall = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->paginate(15);

    $eventpost = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->paginate(3);

    return view('pages.index', [
      'event' => $event,
      'eventall' => $eventall,
      'eventpost' => $eventpost,
    ]);
  }
}
