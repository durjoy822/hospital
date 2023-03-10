@extends('home.layouts.master')
@section('content')
    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                    data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="small-container">
            <div class="sec-title text-center">
                <span class="sub-title">Contact Now</span>
                <h2>Write us a Message !</h2>
                <span class="divider"></span>
            </div>

            <!-- Contact box -->
            <div class="contact-box">
                <div class="row">
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-worldwide"></span>
                            <h4><strong>Address</strong></h4>
                            <p>185, Pickton Near Street, <br>Los Angeles, USA</p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-phone"></span>
                            <h4><strong>Phone</strong></h4>
                            <p><a href="#">(+92) 313 888 000</a></p>
                            <p><a href="#">(+92) 313 999 000</a></p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-email"></span>
                            <h4><strong>Email</strong></h4>
                            <p><a href="mailto:support@example.com">support@example.com</a></p>
                            <p><a href="mailto:support@example.com">support@example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form box -->
            <div class="form-box">
                <div class="contact-form">
                    <form action="{{route('contact.us')}}" method="post" id="email-form">@csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <div class="response"></div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="username" placeholder="Full Name *" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="email" placeholder="Email Address *" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" class="username" placeholder="Your Phone" value="{{ old('phone') }}">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <textarea class="message" name="message" placeholder="Massage">{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group col-lg-12 text-center pt-3">
                                <button class="theme-btn btn-style-one" type="submit" id="submit"
                                    ><span class="btn-title">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->
@endsection
