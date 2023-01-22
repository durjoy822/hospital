@extends('home.layouts.master')
@section('content')
<section class="page-title" style="background-image: url(assets/home/images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Departments</h1
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>{{$singleDep->name}}</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Our Blog-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="images-box">
                        <figure class="image wow fadeIn"><a href="images/resource/service-single.jpg')}}" class="lightbox-image" data-fancybox="services"><img src="{{asset($singleDep->image)}}" alt=""></a></figure>
                    </div>

                    <div class="content-box">
                        <div class="title-box">
                            <h2>{{$singleDep->name}}</h2>
                        </div>
                        <p>{{$singleDep->details}}</p>
                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box">
                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-details" class="tab-btn active-btn">Precautions</li>
                                    <li data-tab="#prod-spec" class="tab-btn">Intelligence</li>
                                    <li data-tab="#prod-reviews" class="tab-btn">Specializations</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-details">
                                        <div class="content">
                                            <p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>
                                        </div>
                                    </div>

                                    <!--Tab -->
                                    <div class="tab" id="prod-spec">
                                        <div class="content">
                                            <p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="prod-reviews">
                                        <div class="content">
                                            <p>Suspendisse laoreet at nulla id auctor. Maecenas in dui cursus, lacinia nisl non, blandit lorem. Aliquam vel risus hendrerit, faucibus nisl a, porta sapien. Etiam iaculis mattis quam, nec iaculis velit feugiat quis. Pellentesque sed feugiat dui, ac euismod leo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories">
                        <div class="widget-content">
                            <!-- Services Category -->
                            <ul class="services-categories">
                                <li><a href="{{route('departments')}}">All Departments</a></li>
                                @php $dname = \App\Models\Department::get(); @endphp
                            @foreach($dname as $dep)
                                <li><a href="{{route('single.department',[$dep->name])}}">{{$dep->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

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
                @foreach($dname as $dep)
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{route('single.department',[$dep->name])}}"><img src="{{asset($dep->image)}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-box">
                                <span class="icon flaticon-heart-2"></span>
                                <h4><a href="{{route('single.department',[$dep->name])}}">{{$dep->name}}</a></h4>
                            </div>
                            <div class="text">{{substr($dep->details,0,100) }}...</div>
                            <span class="icon-right flaticon-heart-2"></span>
                        </div>
                    </div>
                </div>
                @endforeach
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
