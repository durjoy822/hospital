@extends('home.layouts.master')
@section('content')
    <!-- Sidebar Page Container -->
<div class="sidebar-page-container " style="padding: 0px">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="our-shop">
                    <div class="shop-upper-box">
                        <div class="items-label">Showing all Serching  results</div>
                    </div>

                    <div class="row">
                        @if($products->count())
                        @foreach ($products as $drug)
                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="{{ route('medicine.show', $drug->id) }}"><img
                                                src="{{ asset($drug->picture) }}" alt=""></a></figure>
                                    <span class="onsale">Sale</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a
                                            href="{{ route('medicine.show', $drug->id) }}">{{ $drug->name }}</a>
                                    </h4>
                                    <div class="price">{{ $drug->price }} tk</div>
                                    <a href="{{ route('bag', $drug->id) }}" class="theme-btn add-to-cart">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            @else
                        <h3>Searching product Not found!</h3>
                            @endif
                    </div>

                    <!--Styled Pagination-->
                    {{ $drugs->links('home.layouts.defaultPagination') }}
                    <!--End Styled Pagination-->
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <!--search box-->
                    <div class="sidebar-widget search-box">
                        <a href="{{route('product')}}">
                            <button type="button" class="theme-btn btn-style-one"><span class="btn-title">Back</span></button>
                        </a>
                    </div>
                        <!-- Popular Medicin -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title">
                                <h3>Popular Medicin</h3>
                            </div>
                            <div class="widget-content">
                                @foreach($populerMedi as $medicin)
                                <article class="post">
                                    <div class="post-thumb"><a href={{ route('medicine.show', $medicin->id) }}><img
                                            src="{{ asset($medicin->picture) }}"
                                            alt=""></a></div>
                                    <h5><a href={{ route('medicine.show', $medicin->id) }}>{{$medicin->name}}</a></h5>
                                    <div class="price">{{$medicin->price}} tk</div>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>

                        <!-- Newslatters/Subscriber -->
                        <div class="sidebar-widget newslatters">
                            <div class="sidebar-title">
                                <h3><span class="icon flaticon-rss-symbol"></span>Newsletter</h3>
                            </div>
                            <div class="text">Enter your email address below to subscribe to our newsletter</div>
                            <form method="post" action="{{route('admin.newsletter.store')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" value=""
                                           placeholder="Your email address..." required="">
                                    <span class="text-danger">@error('email') {{$message}}@enderror</span>
                                    <button type="submit" class="theme-btn"><span
                                            class="btn-title">Subscribe</span></button>
                                </div>
                            </form>
                        </div>
                </aside>
            </div>
        </div>

    </div>
</div>
@endsection

