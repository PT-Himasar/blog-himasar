@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
@vite([
'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card px-sm-6 px-0">
        <div class="justify-content-center text-center d-flex">
          @if (session('errors'))
          @if ($errors->has('email'))
          <div id="loginError" class="alert alert-danger mt-2" role="alert">
            {{ $errors->first('email') }}
          </div>
          @endif
          @endif

          @if (session('throttleError'))
          <div id="throttleError" class="alert alert-danger mt-2" role="alert">
            {{ session('throttleError') }}
          </div>
          @endif

          <script>
            // Auto-hide success alert after 3 seconds
            setTimeout(function() {
              fadeOutAndRemove("loginError");
            }, 3000);

            setTimeout(function() {
              fadeOutAndRemove("throttleError");
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
        <div class="card-body">
          <!-- Logo -->
          <img src="{{asset('assets/img/favicon/logo1.png')}}" alt="user-avatar" class="d-block w-px-140 h-px-50 align-items-center justify-content-center d-flex text-center" />
          <!-- /Logo -->
          <p class="my-6">Please sign-in to your account and start the adventure</p>

          <form class="mb-6" action="{{url('/login')}}" method="POST">
            @csrf
            <div class="mb-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus>
            </div>
            <div class="mb-6 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="enter your pass" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-8">
              <div class="d-flex justify-content-between mt-8">
                <div class="form-check mb-0 ms-2">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me">
                    Remember Me
                  </label>
                </div>
                <a href="{{url('auth/forgot-password-basic')}}">
                  <span>Forgot Password?</span>
                </a>
              </div>
            </div>
            <div class="mb-6">
              <button class="btn btn-danger d-grid w-100">Login</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
@endsection
