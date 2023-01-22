@extends('home.layouts.master')
@section('content')
 <!-- Sidebar Page Container -->
 <div class="sidebar-page-container pt-0">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                 <div class="shop-single">
                    <div class="product-details">
                        <!--Basic Details-->
                        <div class="basic-details">
                            <div class="row clearfix">
                                <div class="image-column col-md-6 col-sm-12">
                                    <figure class="image-box"><a href="{{asset($drug->picture)}}" class="lightbox-image" title="Image Caption Here"><img src="{{asset($drug->picture)}}" alt=""></a></figure>
                                </div>
                                <div class="info-column col-md-6 col-sm-12">
                                    <div class="details-header">
                                        <h4>{{$drug->name}}</h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <a class="reviews" href="#">( 3 Customer Reviews )</a>
                                        <div class="item-price">{{$drug->price}}</div>
                                    </div>

                                    <div class="text">{{$drug->details}}</div>
                                    <div class="other-options clearfix">
                                        <div class="item-quantity"><input type="text" value="2" name="quantity"></div>
                                        <button type="button" class="theme-btn btn-style-one add-to-cart"><span class="btn-title">Add To Cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Basic Details-->

                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-details" class="tab-btn">Descripton</li>
                                    <li data-tab="#prod-reviews" class="tab-btn active-btn">Review (3)</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab-->
                                    <div class="tab" id="prod-details">
                                        <div class="content">
                                            <h3>Product Descripton</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. sunt in culpa qui officia deserunt mollit</p>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab active-tab" id="prod-reviews">
                                        <h2 class="title">3 Reviews For Patient Ninja</h2>
                                        <!--Reviews Container-->
                                        <div class="comments-area style-two">
                                            <!--Comment Box-->
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="{{asset('assets/home/images/resource/avatar-1.jpg')}}" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info">
                                                            <div class="name">Steven Rich</div>
                                                            <div class="date">May 29, 2020</div>
                                                        </div>
                                                        <div class="rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star light"></span>
                                                        </div>
                                                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Comment Box-->
                                            <div class="comment-box reply-comment">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="{{asset('assets/home/images/resource/avatar-2.jpg')}}" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info">
                                                            <div class="name">Cobus Besten</div>
                                                            <div class="date">June 01, 2020</div>
                                                        </div>
                                                        <div class="rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="text">Lorem Ipsum is simply dummy text of the printing </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Comment Box-->
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="{{asset('assets/home/images/resource/avatar-3.jpg')}}" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info">
                                                            <div class="name">Magnus Hichki</div>
                                                            <div class="date">June 02, 2020</div>
                                                        </div>
                                                        <div class="rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Comment Form -->
                                        <div class="shop-comment-form">
                                            <h2>Add a Review</h2>
                                            <div class="mail-text"><span class="theme_color">Your email address will not be published.</span> Required fields are marked*</div>
                                            <div class="rating-box">
                                                <div class="text"> Your Rating:</div>
                                                <div class="rating">
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                </div>
                                                <div class="rating">
                                                    <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                                    <a href="#"></a>
                                                </div>
                                                <div class="rating">
                                                    <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                                </div>
                                                <div class="rating">
                                                    <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                                </div>
                                                <div class="rating">
                                                    <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                                </div>
                                            </div>
                                            <form method="post" action="contact.html">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Your Review*"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="username" placeholder="Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="number" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">SUBMIT</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Info Tabs-->
                    </div>
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
