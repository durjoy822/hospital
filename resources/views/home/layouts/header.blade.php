<!-- Preloader -->
<div class="preloader"></div>
<!-- Main Header-->
<header class="main-header header-style-one">

    <!-- Header top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                @isset($hospitalInfo)
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i
                                    class="flaticon-hospital-1"></i>{{ $hospitalInfo->address . ', ' . $hospitalInfo->city . ', ' . $hospitalInfo->country }}
                            </li>
                            <li><i class="flaticon-back-in-time"></i>{{ $hospitalInfo->time }}</li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one">
                            <li><a href="{{ URL::to('https://' . $hospitalInfo->link_one) }}"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="{{ URL::to('https://' . $hospitalInfo->link_two) }}"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li><a href="{{ URL::to('https://' . $hospitalInfo->link_three) }}"><span
                                        class="fab fa-skype"></span></a></li>
                            <li><a href="{{ URL::to('https://' . $hospitalInfo->link_four) }}"><span
                                        class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                @endisset
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
                    @isset($hospitalInfo)
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset($hospitalInfo->logo) }}"
                                    alt="" title=""></a>
                        </div>
                    @endisset
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('doctor') }}">Doctors</a></li>
                            <li><a href="{{ route('departments') }}">Departments</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('product') }}">Medicine</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li class="dropdown">
                                <span>Pages</span>
                                <ul>
                                    <li><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('terms') }}">Terms and Condition</a></li>
                                </ul>
                            </li>
                            @if (Auth::check())
                                <li class="dropdown">
                                    <span>Settings</span>
                                    <ul>
                                        <li><a
                                                href="{{ route('user.profile', str_replace(' ', '-', auth::user()->name)) }}">Profile</a>
                                        </li>
                                        <li><a href="{{ route('user.appointment') }}">My Appointment</a></li>
                                        <li><a href="{{ route('user.orders') }}">Order</a></li>
                                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box">
                        <button class="search-btn"><span class="fa fa-search"></span></button>
                        @if (Auth::check())
                            <button type="button" data-toggle="modal" data-target="#appointmentModal"
                                class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></button>
                        @else
                            <a href="{{ route('appointment') }}" class="theme-btn btn-style-one">Appointment</a>
                        @endif
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
                    @isset($hospitalInfo)
                        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset($hospitalInfo->logo) }}"
                                    alt="" title=""></a>
                        </div>
                    @endisset
                </div>
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Header -->
    <div class="mobile-header">
        @isset($hospitalInfo)
        <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset($hospitalInfo->logo) }}" alt=""
            title=""></a></div>
        @endisset
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
