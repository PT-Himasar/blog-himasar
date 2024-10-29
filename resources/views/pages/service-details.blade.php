@extends('layouts.app')
@section('content')
    
    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">Service Details</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Service Details
            <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- service details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="sidebar">
                        <ul class="sidebar-list">
                            <li><a href="#">All Services</a></li>
                            <li><a href="#" class="active">Businee Growth</a></li>
                            <li><a href="#">Financial Advise</a></li>
                            <li><a href="#">Business Consulting</a></li>
                            <li><a href="#">Advanced Analytics</a></li>
                            <li><a href="#">Investment Marketing</a></li>
                            <li><a href="#">Market Research</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 service-colmun">
                    <div class="sidebar-details">
                        <div class="content-style-one">
                            <div class="img-box"><figure><img src="images/service/1.jpg" alt=""></figure></div>
                            <div class="title">Praesent nec nisl iaculis</div>
                            <div class="text">
                                <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beataevitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptassit aspernatur aut odit aut fugit sed quia consequuntur </p>

                                <p>Magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore etdolore magnam aliquam quaerat voluptatem labore.</p>
                            </div>
                        </div>
                        <div class="content-style-two">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="content-side">
                                        <h4> Tincidunt ante enim posuere</h4>
                                        <div class="text"><p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis</p></div>
                                        <ul class="list">
                                            <li><p>Morbi fermentum felis nec</p></li>
                                            <li><p>Morbi fermentum felis nec gravida tempus.</p></li>
                                            <li><p>Morbi fermentum felis nec gravida</p></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="img-box"><figure><img src="images/service/2.jpg" alt=""></figure></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-style-three">
                            <h4>Mauris ullamcorper feugiat</h4>
                            <div class="text">
                                <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum. Sed ut pers
                                piciatisunde omnis iste natus error.sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque 
                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt </p>

                                <p>ExplicaboNemo enim ipsam voluptatemquiavoluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service details end -->

    @endsection
