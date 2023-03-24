@extends('home.layouts.master')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image: url(assets/home/images/background/8.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Dedicated Doctors</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Doctors</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Section Two -->
    <section class="team-section-two alternate alternate2">
        <div class="auto-container">
            <div class="row">
                <!-- Team Block -->
                @foreach($doctors as $key => $doctor)
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" @if($key = 1 || $key = 4)data-wow-delay="400ms" @endif @if($key = 2 || $key = 5)data-wow-delay="400ms" @endif>
                    <div class="inner-box">
                        <div class="image-box">
                           <figure class="image"><a href="{{route('doctor.details',$doctor->id)}}"><img src="{{asset($doctor->photo)}}" alt="{{$doctor->name}}" style="height:480px"></a></figure>
                           <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h5 class="name"><a href="{{route('doctor.details',$doctor->id)}}">{{$doctor->name}}</a></h5>
                            @php $department = DB::table('departments')->find($doctor->specialization); @endphp
                            <span class="designation">@if(isset($department)){{$department->name}} @else Specialization not found @endif</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="sec-bottom-text">Don’t hesitate, contact us for better help and services. <a href="#">Explore all Dr. Team</a></div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <span class="title">HAPPY Patient</span>
                <h2>What Says Our Patients</h2>
                <span class="divider"></span>
            </div>

            <div class="testimonial-outer">
                <!-- Product Thumbs Carousel -->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('assets/home/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('assets/home/images/resource/testi-thumb-2.jpg')}}" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('assets/home/images/resource/testi-thumb-3.jpg')}}" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('assets/home/images/resource/testi-thumb-2.jpg')}}" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{asset('assets/home/images/resource/testi-thumb-3.jpg')}}" alt=""></figure>
                            <div class="author-info">
                                <span class="icon fa fa-quote-left"></span>
                                <div class="author-name">Lara Croft</div>
                                <div class="designation">Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel default-dots owl-carousel owl-theme">

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>

                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call To Action -->
            <div class="call-to-action">
                <div class="inner-container">
                    <div class="content-column">
                        <h4>We Employ The Latest Technology</h4>
                        <h2>We Ensure Safe Dental Sergery </h2>
                        <a href="#" class="theme-btn btn-style-three"><span class="btn-title">Take Appointment</span></a>
                    </div>

                    <div class="video-column">
                        <div class="btn-box">
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
                            <span class="title">Watch now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
@endsection
