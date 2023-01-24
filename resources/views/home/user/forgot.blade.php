@extends('home.layouts.master')
@section('content')
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!-- Login Form -->
                    <div class="login-form">
                        <h2>Forgot Password</h2>
                        <!--Login Form-->
                        <form method="post" action="{{ route('forgot.password.link') }}">@csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                    required>
                                @if ($errors->has('email'))
                                    <span class="error text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="btn-title">Send Reset Password Link</span></button>
                            </div>

                            <div class="form-group pass">
                                <a href="{{ route('login') }}" class="psw">Remember your password?</a>
                            </div>
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>

                <div class="column col-lg-6 col-md-6 col-sm-12">

                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <h2>Register</h2>
                        <!--Login Form-->
                        <form method="post" action="{{ route('user.register') }}">@csrf
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="form-group">
                                <label>Your Password</label>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="btn-title">Register</span></button>
                            </div>
                        </form>
                    </div>
                    <!--End Register Form -->
                </div>
            </div>
        </div>
    </section>
@endsection
