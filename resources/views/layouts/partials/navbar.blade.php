<!--header search-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search Something">
                            <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end header search-->

<!-- main header area -->
<header class="main-header">
    <!-- header upper -->
    <!-- <div class="header-upper">
        <div class="container">
            <ul class="top-left">
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>himasar.dp@undipa.ac.id
                </li>
                <li><i class="fa fa-phone"></i>0812-5553-2987</li>
            </ul>
        </div>
    </div> -->
    <!-- end header upper -->

    <!-- header lower -->
    <div class="header-lower">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-box">
                        <a href="{{ route('index') }}"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->routeIs('index') ? 'current' : '' }}"><a
                                            href="{{ route('index') }}">Home</a></li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a
                                            href="{{ route('about') }}">About Us</a></li>

                                    <li
                                        class="dropdown {{ request()->is('structure') || request()->is('gallery') || request()->is('faq') || request()->is('error') ? 'current' : '' }}">
                                        <a href="#">Structure</a>
                                        <ul>
                                            <li class="{{ request()->routeIs('structure') ? 'current' : '' }}"><a
                                                    href="{{ route('structure') }}">Structure Team</a></li>
                                            <li class="{{ request()->routeIs('alumni') ? 'current' : '' }}"><a
                                                    href="{{ route('alumni') }}">Alumni</a></li>
                                            <li class="{{ request()->routeIs('gallery') ? 'current' : '' }}"><a
                                                    href="{{ route('gallery') }}">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li
                                        class="dropdown {{ request()->is('our-blog') || request()->is('blog-details') ? 'current' : '' }}">
                                        <a href="#">Posts</a>
                                        <ul>
                                            <li class="{{ request()->routeIs('our-blog') ? 'current' : '' }}"><a
                                                    href="{{ route('our-blog') }}">Blog</a></li>
                                            <li class="{{ request()->routeIs('our-event') ? 'current' : '' }}"><a
                                                    href="{{ route('our-event') }}">Event</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a
                                            href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <div class="search-box">
                                <div class="toggle-search">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header lower -->

    <!--sticky header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-box">
                        <a href="{{ route('index') }}"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->routeIs('index') ? 'current' : '' }}"><a
                                            href="{{ route('index') }}">Home</a></li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a
                                            href="{{ route('about') }}">About Us</a></li>
                                    <li
                                        class="dropdown {{ request()->is('structure') || request()->is('gallery') || request()->is('faq') || request()->is('error') ? 'current' : '' }}">
                                        <a href="#">Structure</a>
                                        <ul>
                                            <li class="{{ request()->routeIs('structure') ? 'current' : '' }}"><a
                                                    href="{{ route('structure') }}">Structure Team</a></li>
                                            <li class="{{ request()->routeIs('gallery') ? 'current' : '' }}"><a
                                                    href="{{ route('gallery') }}">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li
                                        class="dropdown {{ request()->is('our-blog') || request()->is('blog-details') ? 'current' : '' }}">
                                        <a href="#">Posts</a>
                                        <ul>
                                            <li class="{{ request()->routeIs('our-blog') ? 'current' : '' }}"><a
                                                    href="{{ route('our-blog') }}">Blog</a></li>
                                            <li class="{{ request()->routeIs('our-event') ? 'current' : '' }}"><a
                                                    href="{{ route('our-event') }}">Event</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a
                                            href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <div class="search-box">
                                <div class="toggle-search">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end sticky header-->
</header>
<!--end main header area -->
