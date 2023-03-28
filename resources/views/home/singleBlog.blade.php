@extends('home.layouts.master')
@section('content')

<!--Sidebar Page Container-->
<div class="sidebar-page-container" style="padding-top:0px">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Our Blog-->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">
                    <div class="images-box">
                        <figure class="image wow fadeIn"><img src="{{asset($blog->picture)}}" alt="" style="height: 350px"></figure>
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



                    <div class="help-box">
                        <span>Quick Contact</span>
                        <h4>Get Solution</h4>
                        <p>Contact us at the Medicoz office nearest to you or submit a business inquiry online.</p>
                        <a href="{{route('contact')}}" class="theme-btn btn-style-one"><span class="btn-title">Contact</span></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->
<!-- Clients Section -->
@include('home.layouts.sponsor');
@endsection
