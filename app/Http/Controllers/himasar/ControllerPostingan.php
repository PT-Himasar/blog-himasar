<?php

namespace App\Http\Controllers\himasar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;

class ControllerPostingan extends Controller
{
  public function event(Request $request)
  {
    $event = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->paginate(4);
    $new_event = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->take(4)->get();

    $new_event->transform(function ($item) {
      $item->judul = Str::limit(ucwords(strtolower($item->judul)), 50, '...');
      return $item;
    });
    return view('pages.our-event', [
      'event' => $event,
      'new_event' => $new_event
    ]);
  }

  public function event_details($judul)
  {
    $event = News::findOrFail($judul); // Mengambil blog berdasarkan judul
    $post = News::find($judul);
    $url = route('blog-details', $judul);
    $title = $post->title;
    $new_event = News::where('kategori', 'event')->orderBy('created_at', 'DESC')->paginate(4);

    $new_event->transform(function ($item) {
      $item->judul = Str::limit(ucwords(strtolower($item->judul)), 50, '...');
      return $item;
    });

    return view('pages.event-details', [
      'event' => $event,
      'post' => $post,
      'url' => $url,
      'title' => $title,
      'new_event' => $new_event
    ]); // Mengirim data ke tampilan
  }

  public function blog(Request $request)
  {
    $blog = News::where('kategori', 'blog')->orderBy('created_at', 'DESC')->paginate(4);
    $new_blog = News::where('kategori', 'blog')->orderBy('created_at', 'DESC')->take(4)->get();

    $new_blog->transform(function ($item) {
      $item->judul = Str::limit(ucwords(strtolower($item->judul)), 50, '...');
      return $item;
    });

    return view('pages.our-blog', [
      'blog' => $blog,
      'new_blog' => $new_blog
    ]);
  }

  public function blog_details($judul)
  {
    $blog = News::findOrFail($judul); // Mengambil blog berdasarkan judul
    $post = News::find($judul);
    $url = route('blog-details', $judul);
    $title = $post->title;
    $new_blog = News::where('kategori', 'blog')->orderBy('created_at', 'DESC')->paginate(4);

    $new_blog->transform(function ($item) {
      $item->judul = Str::limit(ucwords(strtolower($item->judul)), 50, '...');
      return $item;
    });

    return view('pages.blog-details', [
      'blog' => $blog,
      'post' => $post,
      'url' => $url,
      'title' => $title,
      'new_blog' => $new_blog
    ]); // Mengirim data ke tampilan
  }

  private function limitWords($string, $wordLimit)
  {
    $words = explode(' ', ucwords(strtolower($string)));
    if (count($words) > $wordLimit) {
      return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
    }
    return implode(' ', $words);
  }
}
