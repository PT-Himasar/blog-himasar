@extends('layouts.app')
@section('content')

<!-- page title -->
<div class="about-bg centered">
    <div class="container">
        <div class="text">Our Services</div>
    </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
    <div class="container">
        <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Our Services
            <!-- <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div> -->
        </div>
    </div>
</div>
<!-- bread crumb end -->

<!-- Service -->
<section class="service-section">
    <div class="container-fullid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-sm-12 service-colmun">
                <div class="service-title">
                    <div class="sec-title">
                        <h2>Our <span>Services</span></h2>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit sed do eiusm temp or incididunt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 service-colmun">
                <div class="three-column-carousel">
                    <div class="single-item">
                        <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-remove"></i></a></div>
                        <h4><a href="{{ route('service-details') }}">Business Growth</a></h4>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                                ididunt ut labore</p>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-remove"></i></a></div>
                        <h4><a href="{{ route('service-details') }}">Business Growth</a></h4>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                                ididunt ut labore</p>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-remove"></i></a></div>
                        <h4><a href="{{ route('service-details') }}">Business Growth</a></h4>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                                ididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service -->


<!-- service-style-two -->
<section class="service-style-tow">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                <div class="service-content">
                    <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-graph"></i></a></div>
                    <h4><a href="{{ route('service-details') }}">Business Growth</a></h4>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                <div class="service-content">
                    <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-people"></i></a></div>
                    <h4><a href="{{ route('service-details') }}">Financial Advise</a></h4>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                <div class="service-content">
                    <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-suitcase"></i></a></div>
                    <h4><a href="{{ route('service-details') }}">Business Consulting</a></h4>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                <div class="service-content">
                    <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-business"></i></a></div>
                    <h4><a href="{{ route('service-details') }}">Advanced Analytics</a></h4>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                <div class="service-content">
                    <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-investment"></i></a></div>
                    <h4><a href="{{ route('service-details') }}">Investment Banking</a></h4>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                <div class="service-content">
                    <div class="icon-box"><a href="{{ route('service-details') }}"><i class="flaticon-bar-chart"></i></a></div>
                    <h4><a href="{{ route('service-details') }}">Market Research</a></h4>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor inc
                            ididunt ut labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service style two end -->

<!-- call-back-section -->
<section class="call-back sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 colmun">
                <div class="call-back-content">
                    <div class="call-back-title">
                        <div class="section-title">
                            <h2>Request A <span>Call Back</span></h2>
                        </div>
                        <div class="title-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp </p>
                        </div>
                    </div>
                    <div class="form-area">
                        <form action="#">
                            <h2>Pendaftaran</h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <input type="text" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                    <div class="select-box">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="custom-select-box">
                                            <option>Select a Topic</option>
                                            <option>Project</option>
                                            <option>Financial</option>
                                            <option>Bima</option>
                                            <option>Insurence</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn-one style-one radi">Send Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call-back-section end -->

<!-- team section -->
<section class="our-team sec-pad">
    <div class="container">
        <div class="team-title centered">
            <div class="section-title">
                <h2>Our Experts</h2>
            </div>
            <div class="title-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
                <div class="bxslider ">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                            <div class="clearfix">
                                <figure class="img-box pull-left">
                                    <a href="team.html"><img src="{{ asset('assets-user/images/team/1.jpg') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="team-text"><a href="team.html">Mark Richardson</a></div>
                                    <span>Project Manager</span>
                                </div>
                                <div class="text">
                                    <p>Excepteur sint occaecat cupidatat proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                </div>
                                <div class="team-contact">
                                    <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                    <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                </div>
                                <ul class="team-social">
                                    <li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                            <div class="clearfix">
                                <figure class="img-box pull-left">
                                    <a href="team.html"><img src="{{ asset('assets-user/images/team/2.jpg') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="team-text"><a href="team.html">Robat Jsion</a></div>
                                    <span>Project Controlar</span>
                                </div>
                                <div class="text">
                                    <p>Excepteur sint occaecat cupidatat proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                </div>
                                <div class="team-contact">
                                    <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                    <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                </div>
                                <ul class="team-social">
                                    <li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                            <div class="clearfix">
                                <figure class="img-box pull-left">
                                    <a href="team.html"><img src="{{ asset('assets-user/images/team/3.jpg') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="team-text"><a href="team.html">Julia Richardson</a></div>
                                    <span>Advisor</span>
                                </div>
                                <div class="text">
                                    <p>Excepteur sint occaecat cupidatat proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                </div>
                                <div class="team-contact">
                                    <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                    <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                </div>
                                <ul class="team-social">
                                    <li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                            <div class="clearfix">
                                <figure class="img-box pull-left">
                                    <a href="team.html"><img src="{{ asset('assets-user/images/team/4.jpg') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="team-text"><a href="team.html">Mitchel Mandal</a></div>
                                    <span>Senior Manager</span>
                                </div>
                                <div class="text">
                                    <p>Excepteur sint occaecat cupidatat proident sunt culpa qui officia deserunt mollit an
                                        imlab rum. Sed perspiciatis unde omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam.</p>
                                </div>
                                <div class="team-contact">
                                    <div class="text"><strong>Phone:</strong>&nbsp; &nbsp;(+1) 251-235-3256</div>
                                    <div class="text"><strong>Email:</strong>&nbsp; &nbsp;info@tonybrown.com</div>
                                </div>
                                <ul class="team-social">
                                    <li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pager">
                    <div class="center">
                        <ul class="nav-link list-inline">
                            <li id="slider-prev"></li>
                            <li id="slider-next"></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
                <div class="row">
                    <div class="col-md-5">
                        <div class="slider-pager">
                            <ul class="list-inline thumb-box style2">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure><img src="{{ asset('assets-user/images/team/1.png') }}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure><img src="{{ asset('assets-user/images/team/2.png') }}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <figure><img src="{{ asset('assets-user/images/team/3.png') }}" alt=""></figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#">
                                        <figure><img src="{{ asset('assets-user/images/team/4.png') }}" alt=""></figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team section end -->
@endsection