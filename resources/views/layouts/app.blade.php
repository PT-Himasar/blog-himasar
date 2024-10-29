<!DOCTYPE html>
<html>

<head>
    @include('layouts.partials.header')
</head>

<!-- page wrapper -->

<body class="page-wrapper">

    <!-- .preloader -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- /.preloader -->

    <!-- main header area -->
    @include('layouts.partials.navbar')
    <!-- end main header area -->

    @yield('content')

    <!-- main footer area -->
    @include('layouts.partials.footer')
    <!-- main footer area end -->

    <!--End pagewrapper-->

    <!--Scroll to top-->
    <!-- <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div> -->

</body>

</html>