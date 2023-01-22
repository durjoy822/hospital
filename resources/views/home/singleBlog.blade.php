@extends('home.layouts.master')
@section('content')

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Our Blog-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="images-box">
                        <figure class="image wow fadeIn"><img src="{{asset($blog->picture)}}" alt=""></figure>
                    </div>

                    <div class="content-box">
                        <div class="title-box">
                            <h2>{{$blog->title}}</h2>
                        </div>
                        <p>{{$blog->details}}</p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">
                    
                    <!--Brochures Box-->
                    <div class="brochures-box">
                        <div class="inner">
                            <h4>Download Brochures</h4>
                            <div class="text">Etiam tortor lorem, auctor ut orci ut, vehicula ultricies mauris. scelerisque gravida.</div>
                            <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Info Company</span></a>
                            <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Brochure Newest</span></a>
                        </div>
                    </div>

                    <div class="help-box">
                        <span>Quick Contact</span>
                        <h4>Get Solution</h4>
                        <p>Contact us at the Medicoz office nearest to you or submit a business inquiry online.</p>
                        <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->

    <!-- Services Section -->
<section class="services-section-two">
    <div class="auto-container">
        <div class="carousel-outer">
            <!-- Services Carousel -->
            <div class="services-carousel owl-carousel owl-theme default-dots">
                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-1.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-heart-2"></span>
                                <h4><a href="department-detail.html">Cardiology Department</a></h4> 
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-heart-2"></span>
                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-2.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-brain"></span>
                                <h4><a href="department-detail.html">Neurology Department</a></h4>
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-brain"></span>
                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-3.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-kidney"></span>
                                <h4><a href="department-detail.html">Urology Department</a></h4>
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-kidney"></span>
                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-12.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-ovum"></span>
                                <h4><a href="department-detail.html">Gynecological</a></h4> 
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-ovum"></span>
                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-10.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-parents"></span>
                                <h4><a href="department-detail.html">Pediatrical</a></h4>
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-parents"></span>
                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-11.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-science"></span>
                                <h4><a href="department-detail.html">Laboratory</a></h4>
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-science"></span>
                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="department-detail.html"><img src="{{asset('assets/home/images/resource/service-10.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-parents"></span>
                                <h4><a href="department-detail.html">Pediatrical</a></h4>
                            </div>
                            <div class="text">Introduction. Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist.</div>
                            <span class="icon-right flaticon-parents"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Section -->


<!-- Clients Section -->
<section class="clients-section alternate">
    <div class="auto-container">

        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->
            <ul class="clients-carousel owl-carousel owl-theme">
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/1.png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/2.png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/3.png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/4.png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/5.png')}}" alt=""></a> </li>
            </ul>
        </div>
    </div>
</section>
@endsection