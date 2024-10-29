@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
@vite(['resources/assets/js/pages-account-settings-account.js'])
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <!-- <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-md-row mb-6">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-sm bx-user me-1_5"></i> Account</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="bx bx-sm bx-bell me-1_5"></i> Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-connections')}}"><i class="bx bx-sm bx-link-alt me-1_5"></i> Connections</a></li>
      </ul>
    </div> -->
    <div class="card mb-6">
      <!-- Account -->
      <!-- <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 border-bottom">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <div>Allowed JPG, GIF or PNG. Max size of 800K</div>
          </div>
        </div>
      </div> -->
      <div class="justify-content-center text-center d-flex">
        @if(session('success'))
        <div id="successAlert" class="alert alert-success mt-2 col-md-6" role="alert">
          {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div id="errorAlert" class="alert alert-danger mt-2 col-md-6" role="alert">
          {{ session('error') }}
        </div>
        @endif
      </div>
      <script>
        // Auto-hide success alert after 3 seconds
        setTimeout(function() {
          fadeOutAndRemove("successAlert");
        }, 3000);

        setTimeout(function() {
          fadeOutAndRemove("errorAlert");
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
      <div class="card-body pt-4">
        <form action="{{ route('account-update', $himasar->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="row g-6">
            <div class="col-md-6">
              <label for="name" class="form-label">Nama</label>
              <input class="form-control" type="text" id="name" name="name" value="{{ $himasar -> name }}" autofocus />
            </div>
            <div class="col-md-6">
              <label for="no_tlp" class="form-label">No Telpon</label>
              <input class="form-control" type="text" name="no_tlp" id="no_tlp" value="{{ $himasar -> no_tlp }}" />
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="{{ $himasar -> email }}" placeholder="john.doe@example.com" />
            </div>
            <div class="col-md-6">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="col-md-6">
              <label for="visi" class="form-label">Visi</label>
              <textarea name="visi" id="visi" class="form-control" rows="3">{{ $himasar -> visi }}</textarea>
            </div>
            <div class="col-md-6">
              <label for="misi" class="form-label">Misi</label>
              <textarea name="misi" id="misi" class="form-control" rows="3">{{ $himasar -> misi }}</textarea>
            </div>
            <div class="col-md-6">
              <label for="tujuan" class="form-label">Tujuan</label>
              <textarea name="tujuan" id="tujuan" class="form-control" rows="3">{{ $himasar -> tujuan }}</textarea>
            </div>
            <div class="col-md-6">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ $himasar -> alamat }}</textarea>
            </div>
            <div class="col-md-6">
              <label for="about" class="form-label">Himasar</label>
              <textarea name="about" id="about" class="form-control" rows="6">{{ $himasar -> about }}</textarea>
            </div>
            <div class="col-md-6">
              <label for="sejarah" class="form-label">Sejarah</label>
              <textarea name="sejarah" id="sejarah" class="form-control" rows="6">{{ $himasar -> sejarah }}</textarea>
            </div>
          </div>
          <div class="mt-6">
            <button type="submit" class="btn btn-primary me-3">Save changes</button>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
  </div>
</div>
@endsection