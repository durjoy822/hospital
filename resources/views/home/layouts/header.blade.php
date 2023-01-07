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
                        <div class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/home/images/logo.png')}}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation" id="navbar">
                            <li><a href="{{route('home')}}">Home</a></li>

                                <li class="dropdown">
                                    <span>Pages</span>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services.html">Gallery</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="elements.html">UI Elements</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="error-page.html">Error 404</a></li>
                                        <li><a href="terms-and-condition.html">Terms and Condition</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <span>Doctors</span>
                                    <ul>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="doctor-detail.html">Doctor Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <span>Departments</span>
                                    <ul>
                                        <li><a href="departments.html">Departments</a></li>
                                        <li><a href="department-detail.html">Cardiology</a></li>
                                        <li><a href="department-detail.html">Neurology</a></li>
                                        <li><a href="department-detail.html">Urology</a></li>
                                        <li><a href="department-detail.html">Gynecological</a></li>
                                        <li><a href="department-detail.html">Pediatrical</a></li>
                                        <li><a href="department-detail.html">Laboratory</a></li>
                                        <li><a href="department-detail.html">Department Detail</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <span>Blog</span>
                                    <ul>
                                        <li><a href="blog-standard.html">Standard</a></li>
                                        <li><a href="blog-checkboard.html">Checkerboard</a></li>
                                        <li><a href="blog-masonry.html">Masonry</a></li>
                                        <li><a href="blog-two-col.html">Two Columns</a></li>
                                        <li><a href="blog-three-col.html">Three Colums</a></li>
                                        <li><a href="blog-four-col-wide.html">Four Colums</a></li>
                                        <li class="dropdown">
                                            <span>Post Types</span>
                                            <ul>
                                                <li><a href="blog-post-image.html">Image Post</a></li>
                                                <li><a href="blog-post-gallery.html">Gallery Post</a></li>
                                                <li><a href="blog-post-link.html">Link Post</a></li>
                                                <li><a href="blog-post-audio.html">Audio Post</a></li>
                                                <li><a href="blog-post-quote.html">Quote Post</a></li>
                                                <li><a href="blog-post-video.html">Video Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <span>Shop</span>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                            <button class="search-btn"><span class="fa fa-search"></span></button>
                             <a href="{{route('appointment')}}" id="appointment-btn" class="theme-btn btn-style-one"><span class="btn-title">Appointment</span></a>
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
                        <div class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/home/images/logo.png')}}" alt="" title=""></a></div>
                    </div>
                    
                    <!--Keep This Empty / Menu will come through Javascript-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/home/images/logo.png')}}" alt="" title=""></a></div>

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

    </header>