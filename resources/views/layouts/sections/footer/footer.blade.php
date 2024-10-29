@php
$containerFooter = !empty($containerNav) ? $containerNav : 'container-fluid';
@endphp

<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ $containerFooter }}">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        © <script>
          document.write(new Date().getFullYear())
        </script>, made with ❤️ by <a href="https://www.instagram.com/himasar_dp/" target="_blank" class="footer-link">himasar</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://www.instagram.com/himasar_dp/" class="footer-link me-4" target="_blank">Instagram</a>
        <a href="https://www.tiktok.com/@himasar_official/" target="_blank" class="footer-link me-4">Tik Tok</a>
        <a href="https://www.youtube.com/@himasarofficial8703/" target="_blank" class="footer-link me-4">YouTube</a>
        <a href="https://web.facebook.com/people/Himasar-Stmik-Dipanegara/" target="_blank" class="footer-link d-none d-sm-inline-block">Facebook</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->