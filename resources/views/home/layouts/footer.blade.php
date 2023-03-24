<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section" style="background-image: url(assets/home/images/background/7.jpg);">
        <div class="auto-container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        @isset($hospitalInfo)
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset($hospitalInfo->logo) }}"
                                            alt="" /></a>
                                </div>
                                <div class="text">
                                    <p>{{ $hospitalInfo->details }}</p>
                                </div>
                                <ul class="social-icon-three">
                                    <li><a href="{{ URL::to('https://' . $hospitalInfo->link_one) }}"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ URL::to('https://' . $hospitalInfo->link_two) }}"><i
                                                class="fab fa-pinterest"></i></a></li>
                                    <li><a href="{{ URL::to('https://' . $hospitalInfo->link_three) }}"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ URL::to('https://' . $hospitalInfo->link_four) }}"><i
                                                class="fab fa-skype"></i></a></li>
                                    <li><a href="{{ URL::to('https://' . $hospitalInfo->link_five) }}"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        @endisset


                        <!--Footer Column-->
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h2 class="widget-title">Departments</h2>
                                <ul class="user-links">
                                    @foreach ($departments as $department)
                                        <li><a
                                                href="{{ route('single.department', $department->name) }}">{{ $department->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget recent-posts">
                                <h2 class="widget-title">Latest News</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    @foreach ($posts as $post)
                                        <div class="post">
                                            <div class="thumb"><a href="{{route('blog.show',$post->id)}}"><img
                                                        src="{{ asset($post->picture) }}" alt=""></a></div>
                                            <h4><a href="{{route('blog.show',$post->id)}}">{{ $post->title }}</a></h4>
                                            <span
                                                class="date">{{ date('d M Y', strtotime($post->created_at)) }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    @isset($hospitalInfo)
                                    <ul class="contact-list">
                                        <li>
                                            <span class="icon flaticon-placeholder"></span>
                                            <div class="text">{{ $hospitalInfo->address }},
                                                {{ $hospitalInfo->city }} <br> {{ $hospitalInfo->country }}</div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <div class="text">{{ $hospitalInfo->time }}</div>
                                            <a href="tel:+89868679575"><strong>{{ $hospitalInfo->phone }}</strong></a>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-email"></span>
                                            <div class="text">Do you have a Question?<br>
                                                <a
                                                    href="{{ $hospitalInfo->email }}"><strong>{{ $hospitalInfo->email }}</strong></a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-back-in-time"></span>
                                            <div class="text">{{ $hospitalInfo->time }}<br>
                                            </div>
                                        </li>
                                    </ul>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="footer-nav">
                    <ul class="clearfix">
                        <li><a href="index.html">Privacy Policy</a></li>
                        <li><a href="about-us.html">Contact</a></li>
                        <li><a href="services.html">Supplier</a></li>
                    </ul>
                </div>

                <div class="copyright-text">
                    @isset($hospitalInfo)
                    <p>{{ $hospitalInfo->copyright }}</p>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</footer>
@if (Auth::check())
    @include('home.layouts.modal')
@endif
