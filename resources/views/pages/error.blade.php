@extends('layouts.app')
@section('content')
    
    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">Error Page</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('index') }}">Home</a><i class="fa fa-angle-right"></i> Error Page
            <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- error section-->
    <section class="error-section error-page text-center">
        <div class="container">
           <div class="row">
               <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 error-colmun">
                   <div class="error-title">404</div> 
                   <div class="error-content">
                       <h2 class="section-title">Looks like somthing went wrong</h2>
                       <div class="text">
                            <p>The page you are looking for was moved, removed, renamed or might never.</p>
                        </div>
                        <div class="input-box">
                            <form action="#">
                                <input type="text" placeholder="Search again">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                       <div class="error-btn">
                           <a href="{{ route('index') }}" class="btn-one style-one radi">Go Back Home</a>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </section>
    <!-- error serctio end -->

    @endsection