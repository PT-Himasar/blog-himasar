@extends('layouts.app')
@section('title', 'Galeri Kegiatan')
@section('content')

<!-- page title -->
<div class="about-bg centered">
  <div class="container">
    <div class="text">Galeri Kegiatan</div>
  </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
  <div class="container">
    <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Our Gallery
      <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
    </div>
  </div>
</div>
<!-- bread crumb end -->

<!-- gallery-page / gallery-section -->
<section class="gallery-page gallery-section">
  <div class="container">
    <div class="row">
      @foreach($gallery as $row)
      <div class="col-md-4 col-sm-6 col-xs-12 gallery-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/news/' . $row->gambar) }}" height="250" alt=""></figure>
            <div class="overlay">
              <div class="box">
                <div class="content">
                  <a href="{{asset('assets/img/news/' . $row->gambar) }}" class="lightbox-image"><i class="fa fa-eye" aria-hidden="true"></i></a>
                  <h5>Photo Tytle Here</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <ul class="link-btn">
        {{-- Previous Page Link --}}
        @if ($gallery->onFirstPage())
        <li><a href="#" class="disabled"><i class="fa fa-angle-left"></i></a></li>
        @else
        <li><a href="{{ $gallery->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
        @endif

        {{-- Page Numbers --}}
        @php
        $currentPage = $gallery->currentPage();
        $lastPage = $gallery->lastPage();
        @endphp

        @for ($i = max(1, $currentPage - 1); $i <= min($lastPage, $currentPage + 1); $i++)
          <li>
          <a href="{{ $gallery->url($i) }}" class="{{ $currentPage == $i ? 'active' : '' }}">{{ $i }}</a>
          </li>
          @endfor

          {{-- Next Page Link --}}
          @if ($gallery->hasMorePages())
          <li><a href="{{ $gallery->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
          @else
          <li><a href="#" class="disabled"><i class="fa fa-angle-right"></i></a></li>
          @endif
      </ul>
    </div>
  </div>
</section>
<!-- gallery-page / gallery-section end -->

@endsection