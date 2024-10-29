@extends('layouts.app')
@section('title', 'Structure Organization')
@section('content')

<!-- page title -->
<div class="about-bg centered">
  <div class="container">
    <div class="text">STRUKTUR ORGANISASI</div>
  </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
  <div class="container">
    <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Struktur
      <!-- <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div> -->
    </div>
  </div>
</div>
<!-- bread crumb end -->

<!-- DPO -->
<div class="text custom-margin">
  <h2 TEXT ALIGN="center">DEWAN PERTIMBANGAN ORGANISASI</h2>
</div>


<section class="team-page centered">
  <div class="container">
    <div class="row">
      @foreach($dpo->merge($staf_dpo) as $row)
      <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/anggota/' . $row->gambar) }}" height="260"></figure>
          </div>
          <div class="lower-content">
            <ul class="team-social">
              <!-- <li><a href="#" class="tiktok"><i class="fa fa-tiktok"></i></a></li> -->
              <!-- <li><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li> -->
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>

            <div class="team-info">
              <h4>{{ strtoupper($row->nama) }}</h4>
              <span>{{ $row -> jabatan }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- KETUA DKK -->

<!-- DPO -->

<!-- KETUA DAN JAJARAN KEPENGURUSAN -->

<div class="text">
  <h2 TEXT ALIGN="center">KETUA DAN JAJARANNYA</h2>
</div>

<section class="team-page centered">
  <div class="container">
    <div class="row">
      @foreach($ketua->merge($wakil_ketua)->merge($sekretaris)->merge($bendahara) as $row)
      <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/anggota/' . $row->gambar) }}" height="260"></figure>
          </div>
          <div class="lower-content">
            <ul class="team-social">
              <!-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li> -->
              <li><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>

            <div class="team-info">
              <h4>{{ strtoupper($row->nama) }}</h4>
              <span>{{ $row -> jabatan }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- KETUA DKK -->

<!-- BPH -->
<div class="text">
  <h2 TEXT ALIGN="center">DIVISI PEMBELAJARAN</h2>
</div>
<section class="team-page centered">
  <div class="container">
    <div class="row">
      @foreach($koordinator_pembelajaran->merge($wakil_koordinator_pembelajaran)->merge($staf_pembelajaran) as $row)
      <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/anggota/' . $row->gambar) }}" height="260"></figure>
          </div>
          <div class="lower-content">
            <ul class="team-social">
              <!-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li> -->
              <li><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>

            <div class="team-info">
              <h4>{{ strtoupper($row->nama) }}</h4>
              <span>{{ $row -> jabatan }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="text">
  <h2 TEXT ALIGN="center">DIVISI PENGKADERAN</h2>
</div>
<section class="team-page centered">
  <div class="container">
    <div class="row">
      @foreach($koordinator_pengkaderan->merge($wakil_koordinator_pengkaderan)->merge($staf_pengkaderan) as $row)
      <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/anggota/' . $row->gambar) }}" height="260"></figure>
          </div>
          <div class="lower-content">
            <ul class="team-social">
              <!-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li> -->
              <li><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>

            <div class="team-info">
              <h4>{{ strtoupper($row->nama) }}</h4>
              <span>{{ $row -> jabatan }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="text">
  <h2 TEXT ALIGN="center">DIVISI HUMAS</h2>
</div>
<section class="team-page centered">
  <div class="container">
    <div class="row">
      @foreach($koordinator_humas->merge($wakil_koordinator_humas)->merge($staf_humas) as $row)
      <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/anggota/' . $row->gambar) }}" height="260"></figure>
          </div>
          <div class="lower-content">
            <ul class="team-social">
              <!-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li> -->
              <li><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>

            <div class="team-info">
              <h4>{{ strtoupper($row->nama) }}</h4>
              <span>{{ $row -> jabatan }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="text">
  <h2 TEXT ALIGN="center">DIVISI KESERETARIATAN</h2>
</div>
<section class="team-page centered">
  <div class="container">
    <div class="row">
      @foreach($koordinator_kesekretariatan->merge($wakil_koordinator_kesekretariatan)->merge($staf_kesekretariatan) as $row)
      <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
        <div class="single-item">
          <div class="img-box">
            <figure><img src="{{asset('assets/img/anggota/' . $row->gambar) }}" height="260"></figure>
          </div>
          <div class="lower-content">
            <ul class="team-social">
              <!-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li> -->
              <li><a href="https://wa.me/{{ $row->no_tlp }}" target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>

            <div class="team-info">
              <h4>{{ strtoupper($row->nama) }}</h4>
              <span>{{ $row -> jabatan }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Tambahkan CSS langsung di halaman ini -->
<!-- BPH -->
@endsection