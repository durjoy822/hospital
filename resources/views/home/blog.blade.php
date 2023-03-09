@extends('home.layouts.master')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image: url(assets/home/images/background/8.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Checkerboard</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Section -->
    <section class="blog-section blog-checkerboard">
        <div class="auto-container">

            @foreach($blogs as $blog)
            <div class="news-block-three {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{route('blog.show',$blog->id)}}"><img src="{{asset($blog->picture)}}" alt=""></a></figure>
                        <a href="#" class="date">{{ date('d M Y', strtotime($blog->created_at)) }}</a>
                    </div>
                    <div class="content-box">
                        <h4><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h4>
                        <div class="text">{{ Illuminate\Support\Str::limit($blog->details, 200, '...') }}</div>
                        <a href="{{route('blog.show',$blog->id)}}" class="theme-btn btn-style-one read-more"><span class="btn-title">Read More</span></a>
                        <div class="post-info">
                            <div class="post-author">Posted by: {{$blog->posted_by}}</div>
                            <ul class="post-option">
                                <li><a href="#">0 <i class="far fa-heart"></i></a></li>
                                <li><a href="#">0 <i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $blogs->links('home.layouts.defaultPagination') }}
        </div>
    </section>
    <!--End Blog Section -->

    <!-- Clients Section -->
    <section class="clients-section alternate">
        <div class="auto-container">

            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <ul class="clients-carousel owl-carousel owl-theme">
                    <li class="slide-item"> <a href="#"><img src="images/clients/1.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/2.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/3.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/4.png" alt=""></a> </li>
                    <li class="slide-item"> <a href="#"><img src="images/clients/5.png" alt=""></a> </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
