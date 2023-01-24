@extends('home.layouts.master')
@section('content')
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <!-- Login Form -->
                    <div class="login-form">
                        <h2>Reset New Password</h2>
                        <!--Login Form-->
                        <form method="post" action="{{ route('user.reset.password') }}">@csrf
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <input type="hidden" class="form-control" name="email" placeholder="Enter email address"
                                value="{{ $email ?? old('email') }}">
                                <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                                    required>
                                @if ($errors->has('password'))
                                    <span class="error text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" name="password_confirmation" placeholder="Password"
                                    value="{{ old('password_confirmation') }}" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="error text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="btn-title">Reset password</span></button>
                            </div>

                            <div class="form-group pass">
                                <a href="{{ route('login') }}" class="psw">Remember your password?</a>
                            </div>
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
            </div>
        </div>
    </section>
@endsection
