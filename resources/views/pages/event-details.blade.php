@extends('layouts.app')
@section('title', 'Event Details')
@section('content')

<!-- page title -->
<div class="about-bg centered">
  <div class="container">
    <div class="text">Event Details</div>
  </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
  <div class="container">
    <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i>Event Details
      <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
    </div>
  </div>
</div>
<!-- bread crumb end -->

<!-- our-blog -->
<section class="blog-details news-section blog-page sidebar-page-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 content-side">
        <div class="blog-single-section sidebar-details">
          <div class="news-style-one">
            <div class="single-item wow fadeInUp animated animated">
              <div class="img-box">
                <figure><img src="{{ asset('assets/img/news/' . $event->gambar) }}" alt=""></figure>
              </div>
              <div class="news-content">
                <div class="date">
                  {{ $event->created_at->format('d') }}
                  <div class="text">{{ $event->created_at->format('M') }}</div>
                </div>
                <ul class="meta">
                  <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                  <!-- <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                  <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li> -->
                </ul>
                <div class="title" style="color: black;">{{ $event->judul }}</div>
                <div class="text" style="text-align: justify;">
                  {!! $event->berita !!}
                </div>
                <div class="post-share-option mt-3">
                  <div class="text">Share <i class="fa fa-share-alt"></i></div>
                  <ul class="post-social">
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($event->judul) }}%0A%0ABaca selengkapnya di sini: {{ urlencode(url()->current()) }}" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://wa.me/?text={{ urlencode($event->judul) }}%0A%0ABaca selengkapnya di sini: {{ urlencode(url()->current()) }}" class="whatsapp" target="_blank">
                        <i class="fa fa-whatsapp"></i>
                      </a></li>
                    <li><a href="https://www.instagram.com/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/intent/tweet?url={{ urlencode($event->judul) }}%0A%0ABaca selengkapnya di sini: {{ urlencode(url()->current()) }}" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($event->judul) }}%0A%0ABaca selengkapnya di sini: {{ urlencode(url()->current()) }}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-8 col-xs-12 sidebar-side">
        <div class="sidebar">
          <!-- <div class="sidebar-search sidebar-widget">
            <div class="search-box">
              <input type="text" placeholder="Search...">
              <button><i class="fa fa-search"></i></button>
            </div>
          </div> -->
          <div class="sidebar-catagories sidebar-widget">
            <div class="sidebar-title">
              <h4>Categories</h4>
            </div>
            <ul class="sidebar-list">
              <li><a href="#">All Services</a></li>
              <li><a href="#" class="active">Event</a></li>
              <li><a href="{{(route('our-blog'))}}">Blok</a></li>
            </ul>
          </div>
          <div class="sidebar-post sidebar-widget">
            <div class="sidebar-title">
              <h4>Latest Post</h4>
            </div>
            @foreach($new_event as $row)
            <div class="single-post">
              <div class="img-box"><a href="{{ route('event-details', ['id' => $row->id]) }}">
                  <figure><img src="{{asset('assets/img/news/' . $row->gambar) }}" height="55" alt=""></figure>
                </a></div>
              <div class="post-title">
                <h6><a href="{{ route('event-details', ['id' => $row->id]) }}">{{ ucwords(strtolower($row->judul)) }}</a></h6>
              </div>
              <ul class="post-time">
                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                <li>{{ $row->created_at->format('d M, Y') }}</li>
              </ul>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our event end -->

@endsection