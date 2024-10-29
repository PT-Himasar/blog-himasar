<!-- main footer area -->
<footer class="main-footer sec-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
        <div class="logo-widget footer-widget">
          <!-- <div class="footer-logo">
                        <a href="{{ route('index') }}"></a>
                    </div> -->
          <img src="{{ asset('assets/img/favicon/hmsr.jpg') }}" width="100%" alt="">
          <div class="text">
            <!-- <p>Himpunan Mahasiswa Makassar</p> -->
            <!-- <p>"Nai pae punna teai katte sipakainga"</p>
                        <p>Punna stangnga-stangngako Assuluko
                            Punna tojeng-tojengko EWAKO!</p> -->
          </div>
          <!-- <div class="button">
                        <a href="#" class="btn-one style-one radi">Subscribe</a>
                    </div> -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
        <div class="service-widget footer-widget">
          <div class="footer-title">
            <h4>Page</h4>
          </div>
          <ul class="list">
            <li><a href="{{ route('structure') }}">Struktur</a></li>
            <li><a href="{{ route('our-event') }}">Event</a></li>
            <li><a href="{{ route('our-blog') }}">Blog</a></li>
            <li><a href="{{ route('about') }}">About Us </a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
        <div class="subscribe-widget footer-widget">
          <div class="footer-title">
            <h4>NewsLetter</h4>
          </div>
          <div class="text">
            <p>Ikuti Perjalanan Kami</p>
          </div>

          <ul class="footer-social">
            <li class="facebook"><a href="https://www.tiktok.com/@himasar_official/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="instagram"><a href="https://www.instagram.com/himasar_dp/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="whatsapp"><a href="https://wa.me/{{ $himasar -> no_tlp }}" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
            <li class="youtube"><a href="https://www.youtube.com/@himasarofficial8703/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</footer>

<!-- footer bottom -->
<section class="footer-bottom centered">
  <div class="container">
    <div class="copyright">
      <p>&copy; <script>
          document.write(new Date().getFullYear());
        </script> <a href="#"> HIMPUNAN MAHASISWA MAKASSAR </a></p>
    </div>
  </div>
</section>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header">
  <span class="icon fa fa-arrow-up"></span>
</div>

<!--jquery js -->

<!-- jQuery and other scripts -->
<script type="text/javascript" src="{{ asset('assets-user/js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('assets-user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets-user/js/slider-active.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets-user/js/wow.js') }}"></script>
<script src="{{ asset('assets-user/js/validation.js') }}"></script>
<script src="{{ asset('assets-user/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets-user/js/bxslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-user/js/SmoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-user/js/jQuery.style.switcher.min.js') }}"></script>
<script src="{{ asset('assets-user/js/jquery.fancybox.pack.js') }}"></script>

<!-- Revolution Slider Scripts -->
<script src="{{ asset('assets-user/revolution/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.actions.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.kenburn.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.migration.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.navigation.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.parallax.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.slideanims.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets-user/revolution/js/extensions/revolution.extension.video.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets-user/js/script.js') }}"></script>