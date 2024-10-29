@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<div class="row">
  <div class="justify-content-center text-center d-flex">
    @if(session('error'))
    <div id="error" class="alert alert-danger mt-2 col-md-6" role="alert">
      {{ session('error') }}
    </div>
    @endif

    <script>
      // Auto-hide success alert after 3 seconds
      setTimeout(function() {
        fadeOutAndRemove("error");
      }, 3000);

      function fadeOutAndRemove(elementId) {
        var element = document.getElementById(elementId);
        if (element) {
          // Pastikan elemen ditemukan
          var opacity = 1;
          var interval = setInterval(function() {
            if (opacity <= 0) {
              clearInterval(interval);
              element.style.display = "none";
            } else {
              element.style.opacity = opacity;
              opacity -= 0.1; // Sesuaikan kecepatan fading sesuai kebutuhan
            }
          }, 200); // Sesuaikan interval sesuai kebutuhan
        }
      }
    </script>
  </div>
  <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
    <div class="row">
      <div class="col-12 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="paypal" class="rounded">
              </div>
            </div>
            <p class="mb-1">Badan Pengurus Harian</p>
            <h4 class="card-title mb-3">{{ $bph->count() }}</h4>
            <!-- <small class="text-danger fw-medium"><i class='bx bx-down-arrow-alt'></i> -14.82%</small> -->
          </div>
        </div>
      </div>
      <div class="col-12 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded">
              </div>
            </div>
            <p class="mb-1">Total Anggota HIMASAR</p>
            <h4 class="card-title mb-3">{{ $total->count() }}</h4>
            <!-- <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
    <div class="row">
      <div class="col-12 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="paypal" class="rounded">
              </div>
            </div>
            <p class="mb-1">Anggota Muda</p>
            <h4 class="card-title mb-3">{{ $amd->count() }}</h4>
            <!-- <small class="text-danger fw-medium"><i class='bx bx-down-arrow-alt'></i> -14.82%</small> -->
          </div>
        </div>
      </div>
      <div class="col-12 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between mb-4">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded">
              </div>
            </div>
            <p class="mb-1">Calon Anggota</p>
            <h4 class="card-title mb-3">{{ $calon_anggota->count() }}</h4>
            <!-- <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.14%</small> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex flex-column align-items-center gap-1">
            <h4 class="mb-1">Progres Kerja</h4>
            <!-- <small>Total Orders</small> -->
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-3">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Pembelajaran</h6>
                <!-- <small>Mobile, Earbuds, TV</small> -->
              </div>
              <div class="user-progress">
                <h6 class="mb-0">100%</h6>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-3">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Humas</h6>
                <!-- <small>T-shirt, Jeans, Shoes</small> -->
              </div>
              <div class="user-progress">
                <h6 class="mb-0">100%</h6>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-3">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Keseretariatan</h6>
                <!-- <small>Fine Art, Dining</small> -->
              </div>
              <div class="user-progress">
                <h6 class="mb-0">100%</h6>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Pengkaderan</h6>
                <!-- <small>Football, Cricket Kit</small> -->
              </div>
              <div class="user-progress">
                <h6 class="mb-0">100%</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
