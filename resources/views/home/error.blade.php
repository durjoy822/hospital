@extends('home.layouts.master')
@section('content')
<section class="error-section">
    <div class="auto-container">
        <div class="content-box">
            <figure class="error-image"><img src="{{asset('assets/home/images/icons/error.png')}}" alt=""></figure>
            <h2>Page not found</h2>
            <div class="text">Please try one of the following pages:</div>
            <a href="{{route('home')}}" class="theme-btn btn-style-one"><span class="btn-title">Home Page</span></a>
            <a href="{{route('contact')}}" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
        </div>
    </div>
</section>
@endsection
