@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

<!-- page title -->
<div class="about-bg centered">
  <div class="container">
    <div class="text">Contact Us</div>
  </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
  <div class="container">
    <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Contact Us
      <!-- <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div> -->
    </div>
  </div>
</div>
<!-- bread crumb end -->

<!-- contact-info -->
<section class="contact-info contact-page centered">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
        <div class="single-item hvr-float-shadow">
          <div class="icon-box"><i class="fa fa-map-marker"></i></div>
          <div class="title">Lacation</div>
          <div class="text">
            <p>{{ $himasar -> alamat}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
        <div class="single-item hvr-float-shadow">
          <div class="icon-box"><i class="fa fa-phone"></i></div>
          <div class="title">Phone</div>
          <div class="text">
            <p> <a href="https://wa.me/{{ $himasar->no_tlp }}" target="_blank">{{ $himasar -> no_tlp}}</a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
        <div class="single-item hvr-float-shadow">
          <div class="icon-box"><i class="fa fa-envelope"></i></div>
          <div class="title">Email</div>
          <div class="text">
            <p><a href="#">{{ $himasar -> email}}</a><br /></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact infe end -->

<!-- contact-section -->
<section class="contact-section contact-page">
  <div class="container">
    <div class="row">
      <!-- Card Form Kontak -->
      <div class="col-md-6 col-sm-12 col-xs-12 contact-column">
        <div class="card contact-form-card">
          <div class="card-body">
            <div class="title">
              <h2>Kritik dan Saran</h2>
            </div>
            <div class="text">
              <p>Berikan kami saran, atau kritik yang membangun!</p>
            </div>
            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="form_name" value="" placeholder="Nama" required="">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" name="form_email" value="" placeholder="Email" required="">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="form_Phone" value="" placeholder="Telepon" required="">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="form_Subject" value="" placeholder='Subjek' required="">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <textarea placeholder="Pesan" name="form_message" required=""></textarea>
                </div>
              </div>
              <button type="submit" class="btn-one style-one radi" data-loading-text="Harap tunggu...">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Google Map -->
      <div class="col-md-6 col-sm-12 col-xs-12 contact-column">
        <div class="google-map-area">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7720559062186!2d119.48050597474194!3d-5.140361994836833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1723406259832!5m2!1sen!2sid"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact section end -->
@endsection