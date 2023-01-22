<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header-->
<header class="main-header header-style-one">

    <!-- Header top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="flaticon-hospital-1"></i>234 Triumph, Los Angeles, California, US </li>
                        <li><i class="flaticon-back-in-time"></i>Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('assets/home/images/logo.png') }}" alt="" title=""></a>
                    </div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li class="dropdown">
                                <span>Pages</span>
                                <ul>
                                    <li><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('price.table') }}">Pricing Table</a></li>
                                    <li><a href="{{ route('doctor') }}">UI Elements</a></li>
                                    <li><a href="{{ route('coming.soon') }}">Coming Soon</a></li>
                                    <li><a href="{{ route('error') }}">Error 404</a></li>
                                    <li><a href="{{ route('terms') }}">Terms and Condition</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <span>Doctors</span>
                                <ul>
                                    <li><a href="{{ route('doctor') }}">Doctors</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <span>Departments</span>
                                <ul>
                                    <li><a href="{{ route('departments') }}">Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="dropdown">
                                <span>Shop</span>
                                <ul>
                                    <li><a href="{{ route('product') }}">Medicine</a></li>
                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @if (Auth::check())
                                <li><a href="{{ route('user.logout') }}">Logout</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box">
                        <button class="search-btn"><span class="fa fa-search"></span></button>
                        <a href="{{ route('appointment') }}" id="appointment-btn" class="theme-btn btn-style-one"><span
                                class="btn-title">Appointment</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">

            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('assets/home/images/logo.png') }}" alt="" title=""></a>
                    </div>
                </div>

                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/home/images/logo.png') }}"
                    alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Search Btn -->
                <div class="search-box">
                    <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="blog-showcase.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->
    @if (session()->has('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

</header>