@extends('home.layouts.master')
@section('content')
    <section class="banner-section-one">
        <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
            <!-- Slide Item -->

            @foreach ($carousels as $carousel)
                <div class="slide-item" style="background-image: url({{ asset($carousel->image) }});">
                    <div class="auto-container">
                        <div class="content-outer">
                            <div class="content-box">
                                <span class="title">{{ $carousel->heading }}</span>
                                <h2>{{ $carousel->title }}</h2>
                                <div class="text">{{ $carousel->details }}</div>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-style-one"><span class="btn-title">
                                            {{ $carousel->btnOne_name }}
                                        </span></a>
                                    <a href="departments.html" class="theme-btn btn-style-two"><span
                                            class="btn-title">{{ $carousel->btnTwo_name }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Slide Item -->
    </section>
    <!-- End Bnner Section One -->

    <!-- Top Features -->
    <section class="top-features">
        <div class="auto-container">
            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-charity"></span>
                        <h4><a href="#">Quality & Safety</a></h4>
                        <p>Our Delmont hospital utilizes state of the art technology and employs a team of true experts.</p>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-lifeline"></span>
                        <h4><a href="#">Leading Technology</a></h4>a
                        <p>Our Delmont hospital utilizes state of the art technology and employs a team of true experts.</p>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-doctor"></span>
                        <h4><a href="#">Experts by Experience</a></h4>
                        <p>Our Delmont hospital utilizes state of the art technology and employs a team of true experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->


    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">OUR MEDICAL</span>
                            <h2>We're setting Standards in Research what's more, Clinical Care.</h2>
                            <span class="divider"></span>
                            <p>We provide the most full medical services, so every person could have the pportunity o
                                receive qualitative medical help.</p>
                            <p> Our Clinic has grown to provide a world class facility for the treatment of tooth loss,
                                dental cosmetics and bore advanced restorative dentistry. We are among the most qualified
                                implant providers in the AUS with over 30 years of uality training and experience.</p>
                        </div>
                        <div class="link-box">
                            <figure class="signature"><img src="{{ asset('assets/home/images/resource/signature.png') }}"
                                    alt=""></figure>
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">More About</span></a>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-link">
                            <a href="https://www.youtube.com/watch?v=4UvS3k8D4rs" class="play-btn lightbox-image"
                                data-fancybox="images"><span class="flaticon-play-button-1"></span></a>
                        </div>
                        <figure class="image-1"><img src="{{ asset('assets/home/images/resource/image-1.png') }}"
                                alt="">
                        </figure>
                        <figure class="image-2"><img src="{{ asset('assets/home/images/resource/image-2.png') }}"
                                alt="">
                        </figure>
                        <figure class="image-3">
                            <span class="hex"></span>
                            <img src="{{ asset('assets/home/images/resource/image-3.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">OUR SERVICES</span>
                <h2>We Care Our Patients.</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-heartbeat"></span>
                        <h5><a href="#">Health Check</a></h5>
                        <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is
                            and we are very proud achievement staff.</div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-surgery-room"></span>
                        <h5><a href="#">Operation Theater</a></h5>
                        <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is
                            and we are very proud achievement staff.</div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-pharmacy"></span>
                        <h5><a href="#">Pharmacy Support</a></h5>
                        <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is
                            and we are very proud achievement staff.</div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-transport"></span>
                        <h5><a href="#">Ambulance Car</a></h5>
                        <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is
                            and we are very proud achievement staff.</div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-lab"></span>
                        <h5><a href="#">Lat Tests</a></h5>
                        <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is
                            and we are very proud achievement staff.</div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="icon flaticon-first-aid"></span>
                        <h5><a href="#">Intensive Care</a></h5>
                        <div class="text">We offer extensive medical procedures to outbound & inbound patients what it is
                            and we are very proud achievement staff.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our Doctor</span>
                <h2>Our Dedicated Doctors Team</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/home/images/resource/team-1.jpg') }}"
                                alt="">
                        </figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/home/images/resource/team-2.jpg') }}"
                                alt="">
                        </figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/home/images/resource/team-3.jpg') }}"
                                alt="">
                        </figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/home/images/resource/team-4.jpg') }}"
                                alt="">
                        </figure>
                        <ul class="social-links">
                            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        </ul>
                        <div class="info-box">
                            <h4 class="name"><a href="doctor-detail.html">Dr. Morila Wood</a></h4>
                            <span class="designation">Senior Dr. at Delmont</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-bottom-text">Don’t hesitate, contact us for better help and services <a href="#">Explore
                    all Dr.
                    Team</a></div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="image-layer" style="background-image: url(assets/home/images/background/2.jpg);"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <span class="title">Need a Doctor for Check-up?</span>
                        <h2>Just Make an Appointment <br>and You’re Done!</h2>
                        <div class="number">Get Your Quote or Call: <strong>(0080) 123-453-789</strong></div>
                        <a href="#" class="theme-btn btn-style-three"><span class="btn-title">Get an
                                Appointment</span></a>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <figure class="image"><img src="{{ asset('assets/home/images/resource/image-4.png') }}"
                            alt=""></figure>
                </div>
            </div>

            <div class="fun-fact-section">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-user-experience"></span></div>
                            <h4 class="counter-title">Years of Experience</h4>
                            <span class="count-text" data-speed="3000" data-stop="25">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-team"></span></div>
                            <h4 class="counter-title">Medical Spesialities</h4>
                            <span class="count-text" data-speed="3000" data-stop="470">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-hospital"></span></div>
                            <h4 class="counter-title">Medical Spesialities</h4>
                            <span class="count-text" data-speed="3000" data-stop="689">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-add-friend"></span></div>
                            <h4 class="counter-title">Happy Patients</h4>
                            <span class="count-text" data-speed="3000" data-stop="9036">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <span class="title">HAPPY Patient</span>
                <h2>What Says Our Patients</h2>
                <span class="divider"></span>
            </div>

            <div class="testimonial-outer">
                <!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel owl-carousel owl-theme">

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                                the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                                the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                                the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                                the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                                the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                </div>

                <!-- Product Thumbs Carousel -->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('assets/home/images/resource/testi-thumb-1.jpg') }}" alt="">
                            </figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('assets/home/images/resource/testi-thumb-2.jpg') }}" alt="">
                            </figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('assets/home/images/resource/testi-thumb-3.jpg') }}" alt="">
                            </figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('assets/home/images/resource/testi-thumb-2.jpg') }}" alt="">
                            </figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{ asset('assets/home/images/resource/testi-thumb-3.jpg') }}" alt="">
                            </figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <span class="title">OUR BLOG</span>
                <h2>Recent Articles and News</h2>
                <span class="divider"></span>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-post-image.html"><img
                                        src="{{ asset('assets/home/images/resource/news-1.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" class="date">Sep 19, 2020</a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-post-image.html">What is The Success rate<br> of a root canel?</a></h4>
                            <div class="text">Nullam mauris vitae tortor sodales efficitur. Quisque orci ante. Proin amet
                                turpis</div>
                            <div class="post-info">
                                <div class="post-author">By Admin Rose</div>
                                <ul class="post-option">
                                    <li><a href="#">0 <i class="far fa-heart"></i></a></li>
                                    <li><a href="#">0 <i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-post-image.html"><img
                                        src="{{ asset('assets/home/images/resource/news-2.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" class="date">Sep 19, 2020</a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-post-image.html">How to handle your kids’ <Br>mystery ailments?</a></h4>
                            <div class="text">Nullam mauris vitae tortor sodales efficitur. Quisque orci ante. Proin amet
                                turpis</div>
                            <div class="post-info">
                                <div class="post-author">By Admin Rose</div>
                                <ul class="post-option">
                                    <li><a href="#">0 <i class="far fa-heart"></i></a></li>
                                    <li><a href="#">0 <i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-post-image.html"><img
                                        src="{{ asset('assets/home/images/resource/news-3.jpg') }}" alt=""></a>
                            </figure>
                            <a href="#" class="date">Sep 19, 2020</a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-post-image.html">How to help the cardiology <br>department</a></h4>
                            <div class="text">Nullam mauris vitae tortor sodales efficitur. Quisque orci ante. Proin amet
                                turpis</div>
                            <div class="post-info">
                                <div class="post-author">By Admin Rose</div>
                                <ul class="post-option">
                                    <li><a href="#">0 <i class="far fa-heart"></i></a></li>
                                    <li><a href="#">0 <i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">

            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <a href="#"><img src="{{ asset('assets/home/images/clients/1.png') }}"
                                alt=""></a>
                    </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('assets/home/images/clients/2.png') }}"
                                alt=""></a>
                    </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('assets/home/images/clients/3.png') }}"
                                alt=""></a>
                    </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('assets/home/images/clients/4.png') }}"
                                alt=""></a>
                    </li>
                    <li class="slide-item"> <a href="#"><img src="{{ asset('assets/home/images/clients/5.png') }}"
                                alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
<!--End Clients Section -->
