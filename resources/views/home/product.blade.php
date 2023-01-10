@extends('home.layouts.master')
@section('content')
<section class="page-title" style="background-image: url(assets/home/images/background/8.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Our Shop</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Shop</li>
            </ul> 
        </div>
    </div>
</section>
<!--End Page Title-->

 <!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="our-shop">
                    <div class="shop-upper-box">
                        <div class="orderby">
                            <select name="orderby">
                                <option value="default">Default Sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating" >Sort by average rating</option>
                                <option value="date" >Sort by newness</option>
                                <option value="price" >Sort by price: low to high</option>
                                <option value="price-desc" >Sort by price: high to low</option>
                            </select>
                        </div>
                        <div class="items-label">Showing all 9 results</div>
                    </div>

                    <div class="row">
                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/1.jpg')}}" alt=""></a></figure>
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
                                    <h4 class="name"><a href="shop-single.html">Hand Sanitizer</a></h4>
                                    <div class="price"> $12.00 <del>$14.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/2.jpg')}}" alt=""></a></figure>
                                    <span class="onsale">-17%</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Liquid Sanitizer</a></h4>
                                    <div class="price"> $14.00 <del>$17.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/3.jpg')}}" alt=""></a></figure>
                                    <span class="onsale">-17%</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Sanitizer Gel</a></h4>
                                    <div class="price">$25.00 <del>$15.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/4.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Vitamin D3</a></h4>
                                    <div class="price"> $16.88</div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/5.jpg')}}" alt=""></a></figure>
                                    <span class="onsale">-17%</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Vitamin B2</a></h4>
                                    <div class="price"> $14.00 <del>$17.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/6.jpg')}}" alt=""></a></figure>
                                    <span class="onsale">-17%</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Vitamin C+</a></h4>
                                    <div class="price">$25.00 <del>$15.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/7.jpg')}}" alt=""></a></figure>
                                    <span class="onsale">-17%</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Dental Instruments</a></h4>
                                    <div class="price"> $16.88</div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/8.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">First Aid Kit</a></h4>
                                    <div class="price"> $14.00 <del>$17.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/9.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Classic Stethoscope</a></h4>
                                    <div class="price">$25.00 <del>$15.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/10.jpg')}}" alt=""></a></figure>
                                    <span class="onsale">-17%</span>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Zinc Tablet</a></h4>
                                    <div class="price"> $16.88</div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/11.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Iron Tablet</a></h4>
                                    <div class="price"> $14.00 <del>$17.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart">Add to cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item --> 
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/12.jpg')}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
                                    <h4 class="name"><a href="shop-single.html">Folic Acid</a></h4>
                                    <div class="price">$25.00 <del>$15.00</del></div>
                                    <a href="shopping-cart.html" class="theme-btn add-to-cart"> Add to cart</a>
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

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <!--search box-->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="blog.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-widget category-list">
                        <div class="sidebar-title"><h3>Categories</h3></div>
                        <ul class="cat-list">
                            <li><a href="#">Procedures <span>(06)</span></a></li>
                            <li><a href="#">Transplantation <span>(02)</span></a></li>
                            <li class="active"><a href="#">Management <span>(05)</span></a></li>
                            <li><a href="#">Healthcare Tips <span>(25)</span></a></li>
                            <li><a href="#">Uncategorized <span>(04)</span></a></li>
                        </ul>
                    </div>

                    <!-- Latest News -->
                    <div class="sidebar-widget latest-news">
                        <div class="sidebar-title"><h3>Popular Products</h3></div>
                        <div class="widget-content">
                            <article class="post">
                                <div class="post-thumb"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/product-thumb-1.jpg')}}" alt=""></a></div>
                                <h5><a href="shop-single.html">First Aid Kit</a></h5>
                                <div class="price">$9.00</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </article>

                            <article class="post">
                                <div class="post-thumb"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/product-thumb-2.jpg')}}" alt=""></a></div>
                                <h5><a href="shop-single.html">Vitamin C+</a></h5>
                                <div class="price">$20.00</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </article>

                            <article class="post">
                                <div class="post-thumb"><a href="shop-single.html"><img src="{{asset('assets/home/images/resource/products/product-thumb-3.jpg')}}" alt=""></a></div>
                                <h5><a href="shop-single.html">Zinc Tablet</a></h5>
                                <div class="price">$ 18.00</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </article>
                        </div>
                    </div>

                    <!-- Newslatters-->
                    <div class="sidebar-widget newslatters">
                        <div class="sidebar-title"><h3><span class="icon flaticon-rss-symbol"></span>Newsletter</h3></div>
                        <div class="text">Enter your email address below to subscribe to our newsletter</div>
                        <form method="post" action="blog-sidebar.html">
                            <div class="form-group">
                                <input type="text" name="input" value="" placeholder="Your email address..." required="">
                                <button type="submit" class="theme-btn"><span class="btn-title">Subscribe</span></button>
                            </div>
                        </form>
                    </div>


                    <!-- Tags -->
                    <div class="sidebar-widget tags">
                        <div class="sidebar-title"><h3>Tag Cloud</h3></div>
                        <ul class="popular-tags clearfix">
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Doctor</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Department</a></li>
                            <li><a href="#">Nurse</a></li>
                            <li><a href="#">Growth</a></li>
                            <li><a href="#">Expert</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Medical</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</div>
@endsection