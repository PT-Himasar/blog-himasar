@extends('layouts.app')
@section('title', 'Alumni')

@section('content')


    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">ALUMNI HIMASAR</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text">
                <a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Alumni
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- DPO -->
    <div class="text custom-margin">
        <h2 TEXT ALIGN="center">ALUMNI - ALUMNI HIMASAR</h2>
    </div>


    <section class="team-page centered">
        <div class="container">
            <div class="row">
                @foreach ($alumnis as $alumni)
                    <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                        <div class="single-item">
                            <div class="img-box">
                                <figure><img src="{{ $alumni['foto'] }}" height="260">
                                </figure>
                            </div>

                            <div class="lower-content">
                                <ul class="team-social">
                                    @isset($alumni['social_medias'])
                                        @foreach ($alumni['social_medias'] as $item)
                                            @switch($item['nama'])
                                                @case('instagram')
                                                    <li><a href="{{ $item['link'] }}" target="_blank" class="instagram"><i
                                                                class="fa fa-instagram"></i></a></li>
                                                @break

                                                @case('facebook')
                                                    <li><a href="{{ $item['link'] }}" target="_blank" class="linkedin"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                @break

                                                @case('twitter')
                                                    <li><a href="{{ $item['link'] }}" target="_blank" class="twitter"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                @break

                                                @case('whatsapp')
                                                    <li><a href="{{ $item['link'] }}" target="_blank" class="whatsapp"><i
                                                                class="fa fa-whatsapp"></i></a></li>
                                                @break

                                                @default
                                                    <li><a href="{{ $item['link'] }}" target="_blank" class="tiktok"><i
                                                                class="fa fa-globe"></i></a>
                                                    </li>
                                            @endswitch
                                        @endforeach
                                    @endisset
                                </ul>

                                <div class="team-info">
                                    <h4>{{ strtoupper($alumni['nama']) }}</h4>
                                    <ul>
                                        <li><span>NRA : {{ $alumni['nra'] ?? '-' }}</span>
                                        </li>
                                        <li><span>{{ Str::upper($alumni['pattonro']) ?? '-' }}</span></li>
                                        <li><span>{{ $alumni['angkatan_kampus'] }} -
                                                {{ $alumni['tahun_lulus'] ?? 'Belum Lulus' }}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
