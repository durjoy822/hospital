@extends('home.layouts.master')
@section('content')
<section class="page-title" style="background-image: url(assets/home/images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Departments</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Departments</li>
            </ul> 
        </div>
    </div>
</section>
<!--End Page Title-->

 <!-- Services Section -->
<section class="services-section-two">
    <div class="auto-container">

        <div class="carousel-outer">
            <div class="row">
                <!-- service Block -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
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
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
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
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
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
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
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
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
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
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
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
            </div>

             <!--Styled Pagination-->
            <ul class="styled-pagination">
                <li><a href="#" class="arrow"><span class="flaticon-left"></span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#" class="arrow"><span class="flaticon-right"></span></a></li>
            </ul>                
            <!--End Styled Pagination-->
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
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/1..png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/2..png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/3..png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/4..png')}}" alt=""></a> </li>
                <li class="slide-item"> <a href="#"><img src="{{asset('assets/home/images/clients/5..png')}}" alt=""></a> </li>
            </ul>
        </div>
    </div>
</section>
@endsection