@extends('layouts.app')
@section('title', 'Our Event')
@section('content')

<!-- page title -->
<div class="about-bg centered">
  <div class="container">
    <div class="text">Our Event</div>
  </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
  <div class="container">
    <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Our Event
      <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
    </div>
  </div>
</div>
<!-- bread crumb end -->

<!-- our-blog -->
<section class="our-blog news-section blog-page sidebar-page-container">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 content-side">
        <div class="blog-content">
          <div class="row">
            @foreach($event as $row)
            <div class="col-md-6 col-sm-6 col-xs-12 news-colmun">
              <div class="single-item wow fadeInUp animated animated">
                <div class="img-box"><a href="{{ route('event-details', ['id' => $row->id]) }}">
                    <figure><img src="{{asset('assets/img/news/' . $row->gambar) }}" height="250" alt=""></figure>
                  </a></div>
                <div class="news-content">
                  <div class="date">
                    {{ $row->created_at->format('d') }}
                    <div class="text">{{ $row->created_at->format('M') }}</div>
                  </div>
                  <ul class="meta">
                    <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                    <!-- <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>30</li> -->
                  </ul>
                  <h4><a href="{{ route('event-details', ['id' => $row->id]) }}">{{ ucwords(strtolower($row->judul)) }}</a></h4>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <ul class="link-btn">
            {{-- Previous Page Link --}}
            @if ($event->onFirstPage())
            <li><a href="#" class="disabled"><i class="fa fa-angle-left"></i></a></li>
            @else
            <li><a href="{{ $event->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
            @endif

            {{-- Page Numbers --}}
            @php
            $currentPage = $event->currentPage();
            $lastPage = $event->lastPage();
            @endphp

            @for ($i = max(1, $currentPage - 1); $i <= min($lastPage, $currentPage + 1); $i++)
              <li>
              <a href="{{ $event->url($i) }}" class="{{ $currentPage == $i ? 'active' : '' }}">{{ $i }}</a>
              </li>
              @endfor

              {{-- Next Page Link --}}
              @if ($event->hasMorePages())
              <li><a href="{{ $event->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
              @else
              <li><a href="#" class="disabled"><i class="fa fa-angle-right"></i></a></li>
              @endif
          </ul>
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
<!-- our blog end -->

@endsection