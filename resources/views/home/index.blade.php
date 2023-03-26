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
                                    <a href="{{URL::to($carousel->btnOne_link)}}" class="theme-btn btn-style-one"><span class="btn-title">
                                            {{ $carousel->btnOne_name }}
                                        </span></a>
                                    <a href="{{URL::to($carousel->btnTwo_link)}}" class="theme-btn btn-style-two"><span
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
                @foreach($upperCarousel as $upperCarousel)
                <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="{{$upperCarousel->icon}}" ></span>
                        <h4><a href="#">{{$upperCarousel->title}}</a></h4>
                        <p>{{$upperCarousel->details}}</p>
                    </div>
                </div>
                @endforeach
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
                            <h2>{{$video->title ?? ''}}</h2>
                            <span class="divider"></span>
                            <p>{{$video->details ?? ''}}</p>
                        </div>
                        <div class="link-box">
                            <figure class="signature"><img src="{{ asset($video->signature ?? '' ) }}"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-link">
                            <a href="{{URL::to($video->video ?? '')}}" class="play-btn lightbox-image"
                                data-fancybox="images"><span class="flaticon-play-button-1"></span></a>
                        </div>
                        <figure class="image-1"><img src="{{ asset($video->image_one ?? '') }}"
                                alt="image_1">
                        </figure>
                        <figure class="image-2"><img src="{{ asset($video->image_two ??'') }}"
                                alt="image_two">
                        </figure>
                        <figure class="image-3">
                            <span class="hex"></span>
                            <img src="{{ asset($video->image_three ??'') }}" alt="image_three">
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
                @foreach($services as $service)
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="{{$service->icon}}"></span>
                        <h5><a href="#">{{$service->title}}</a></h5>
                        <div class="text">{{$service->details}}</div>
                    </div>
                </div>
                @endforeach
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
                @php
                    $doctors = \App\Models\Doctor::inRandomOrder()
                        ->take(4)
                        ->get();
                @endphp
                @foreach ($doctors as $doctor)
                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <figure class="image"><img src="{{ asset($doctor->photo) }}" alt=""
                                    style="height:400px">
                            </figure>
                            <div class="info-box">
                                <h4 class="name"><a
                                        href="{{ route('doctor.details', $doctor->id) }}">{{ $doctor->name }}</a></h4>
                                <span class="designation">Senior Dr.</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="sec-bottom-text">Don’t hesitate, contact us for better help and services <a
                        href="{{ route('doctor') }}">Explore
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
                        @php $hospitalInfo = \App\Models\Settings::first(); @endphp
                        <div class="number">Get Your Quote or Call: <strong>@isset($hospitalInfo->phone)
                            {{ $hospitalInfo->phone }}
                        @endisset</strong></div>
                        @if (Auth::check())
                            <button type="button" data-toggle="modal" data-target="#appointmentModal"
                                class="theme-btn btn-style-three"><span class="btn-title">Get an
                                    Appointment</span></button>
                        @else
                            <a href="{{ route('appointment') }}" class="theme-btn btn-style-one">Appointment</a>
                        @endif
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
                            @php $countDoctor = \App\Models\Medicine::count(); @endphp
                            <span class="count-text" data-speed="3000" data-stop="{{ $countDoctor }}">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-hospital"></span></div>
                            <h4 class="counter-title">Available Medicine</h4>
                            @php $countMedicine = \App\Models\Medicine::count(); @endphp
                            <span class="count-text" data-speed="3000" data-stop="{{ $countMedicine }}">0</span>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="icon-box"><span class="icon flaticon-add-friend"></span></div>
                            @php $countPatient = \App\Models\Patient::count(); @endphp
                            <h4 class="counter-title">Happy Patients</h4>
                            <span class="count-text" data-speed="3000" data-stop="{{ $countPatient }}">0</span>
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
                @foreach($testimonial as $person)
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">{{$person->review}}</div>
                        </div>
                    </div>
                @endforeach
                    <!--Testimonial Block -->
{{--                    <div class="testimonial-block">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in--}}
{{--                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine--}}
{{--                                the type of service you get for more serious issues. Thanks!</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!--Testimonial Block -->--}}
{{--                    <div class="testimonial-block">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in--}}
{{--                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine--}}
{{--                                the type of service you get for more serious issues. Thanks!</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!--Testimonial Block -->--}}
{{--                    <div class="testimonial-block">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in--}}
{{--                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine--}}
{{--                                the type of service you get for more serious issues. Thanks!</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!--Testimonial Block -->--}}
{{--                    <div class="testimonial-block">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in--}}
{{--                                for a check up and did not wait more than 5 minutes before I was seen. I can only imagine--}}
{{--                                the type of service you get for more serious issues. Thanks!</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

                <!-- Product Thumbs Carousel -->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        @foreach($testimonial as $person)
                        <div class="thumb-item">
                            <figure class="thumb-box"><img
                                    src="{{asset($person->image)}}" alt="1">
                            </figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">{{$person->name}}</div>
                                <div class="designation">{{$person->company_name}}</div>
                            </div>
                        </div>
                        @endforeach
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
                @php
                    $posts = \App\Models\Blog::latest()
                        ->take(3)
                        ->get();
                @endphp
                @foreach ($posts as $post)
                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{route('blog.show',$post->id)}}"><img
                                            src="{{ asset($post->picture) }}" alt=""></a>
                                </figure>
                                <a href="#" class="date">{{ date('d M Y', strtotime($post->created_at)) }}</a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="{{route('blog.show',$post->id)}}">{{ $post->title }}</a></h4>
                                <div class="text">Nullam mauris vitae tortor sodales efficitur. Quisque orci ante. Proin
                                    amet
                                    turpis</div>
                                <div class="post-info">
                                    <div class="post-author">{{ $post->posted_by }}</div>
                                    <ul class="post-option">
                                        <li><a href="#">0 <i class="far fa-heart"></i></a></li>
                                        <li><a href="#">0 <i class="far fa-comments"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                    @foreach($sponsors as $sponsor)
                    <li class="slide-item"> <a href="#"><img src="{{ asset($sponsor->logo) }}"
                                alt=""></a>
                    </li>
                    @endforeach
                </ul>

            </div>

        </div>
    </section>
@endsection
<!--End Clients Section -->
