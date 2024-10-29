@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<!-- page title -->
<div class="about-bg centered">
  <div class="container">
    <div class="text">About Us</div>
  </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
  <div class="container">
    <div class="text">
      <a href="{{ route('index') }}">Home</a>
      <i class="fa fa-angle-right"></i>
      About us
    </div>
  </div>
</div>
<!-- bread crumb end -->

<!-- about section -->
<section class="about-section sec-pad">
  @if ($himasar)
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
        <div class="about-content" style="text-align: justify;">
          <div class="about-title">
            <div class="section-title">
              <h2>HIMASAR</h2>
            </div>
            <div class="title-text"></div>
          </div>
          <div class="text">
            <p>{{ $himasar -> about}}</p>
          </div>
          <ul class="list">
            <li>Visi: {{ $himasar -> visi}}</li>
            <li>Misi: {{ $himasar -> misi}}</li>
            <li>Tujuan: {{ $himasar -> tujuan}}</li>
          </ul>
          <div class="text">
            <p>Sejak didirikan, {{ $himasar -> sejarah}}</p>
          </div>
        </div>

      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 about-colmun">
        <div class="img-box">
          <figure><img src="{{ asset('assets-user/images/logo/hmsr.jpg') }}" alt=""></figure>
        </div>
      </div>
    </div>
  </div>
  @endif
</section>
<!-- about section end -->

<!-- fact-counter -->
<section class="fact-counter centered">
  <div class="container">
    <div class="row ">
      <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
        <div class="single-item">
          <article class="column wow fadeIn" data-wow-duration="0ms">
            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="{{ $umur }}">0</span><span>+</span></div>
            <div class="text">Umur Himasar</div>
          </article>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
        <div class="single-item">
          <article class="column wow fadeIn" data-wow-duration="0ms">
            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="{{ $total->count() }}">0</span><span>+</span></div>
            <div class="text">Kekuatan Kolektif</div>
          </article>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
        <div class="single-item">
          <article class="column wow fadeIn" data-wow-duration="0ms">
            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="{{ $bph->count() }}">0</span><span>+</span></div>
            <div class="text">Motor Penggerak Organisasi</div>
          </article>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
        <div class="single-item">
          <article class="column wow fadeIn" data-wow-duration="0ms">
            <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="{{ $alumni->count() }}">0</span><span>+</span></div>
            <div class="text">Alumni</div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- fact-counter section end -->

@endsection