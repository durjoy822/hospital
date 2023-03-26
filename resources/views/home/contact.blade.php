@extends('home.layouts.master')
@section('content')
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
                            <p>{{$hospitalInfo->address}}</p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-phone"></span>
                            <h4><strong>Phone</strong></h4>
                            <p><a href="#">(+880) {{$hospitalInfo->phone}}</a></p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-email"></span>
                            <h4><strong>Email</strong></h4>
                            <p><a href="mailto:support@example.com">{{$hospitalInfo->email}}</a></p>
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
