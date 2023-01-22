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
                @foreach($dep as $depeartment)
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('single.department',[$depeartment->name])}}"><img src="{{asset($depeartment->image)}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-heart-2"></span>
                                <h4><a href="{{route('single.department',[$depeartment->name])}}">{{$depeartment->name}}</a></h4>
                            </div>
                            <div class="text"> {{substr( $depeartment->details,0,100)}}...</div>
                            <span class="icon-right flaticon-heart-2"></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

             <!--Styled Pagination-->

             {{ $dep->links('home.layouts.defaultPagination') }}
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
