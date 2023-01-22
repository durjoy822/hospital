@extends('home.layouts.master')
@section('content')
    <section class="checkout-page pt-2">
        <div class="auto-container">

            <!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="{{ route('place.order') }}" id="myForm">@csrf
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="sec-title">
                                    <h3>Shipping Details</h3>
                                </div>

                                <div class="row clearfix">
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">Name <sup>*</sup></div>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">Phone</div>
                                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone">
                                        @error('phone_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="field-label">Country</div>
                                        <select name="country">
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>
                                        @error('country')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="field-label">Address</div>
                                        <input type="text" name="street" value="{{ old('street') }}" placeholder="Street address">
                                        @error('street')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="field-label">Town/City</div>
                                        <input type="text" name="city" value="{{ old('city') }}" placeholder="">
                                        @error('city')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">State</div>
                                        <input type="text" name="state" value="{{ old('state') }}" placeholder="">
                                        @error('state')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">Postcode/ ZIP</div>
                                        <input type="text" name="postal_code" value="{{ old('postal_code') }}" placeholder="">
                                        @error('postal_code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 ">
                                        <div class="field-label">Is default Shipping address?</div>
                                        <select name="is_default">
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Order Box-->
                        <div class="order-box col-lg-6">
                            <div class="sec-title">
                                <h3>Your Order</h3>
                            </div>
                            <div class="title-box clearfix">
                                <div class="col">PRODUCT</div>
                                <div class="col text-md-center">TOTAL</div>
                            </div>
                            <ul>
                                @foreach ($bags as $bag)
                                    @php $product = \App\Models\Medicine::findOrFail($bag->product_id); @endphp
                                    <li class="clearfix"><strong>{{ $product->name }}<sup> x
                                                {{ $bag->quantity }}</sup></strong><span
                                            class="text-md-right">{{ $bag->total_price }} TK</span></li>
                                @endforeach
                                <li class="clearfix">SUBTOTAL<span
                                        class="text-md-right">{{ \App\Models\Cart::where('user_id', Auth::user()->id)->sum('total_price') }}
                                        TK</span></li>
                                <li class="clearfix">SHIPPING<span class="text-md-right">50.00 TK</span></li>
                                <li class="clearfix">TOTAL<span
                                        class="text-md-right">{{ number_format(\App\Models\Cart::where('user_id', Auth::user()->id)->sum('total_price') + 50, 2) }}
                                        TK</span></li>
                            </ul>
                        </div>
                        <!--End Order Box-->
                    </div>
                </form>
            </div>
            <!--End Checkout Details-->


            <!--Payment Box-->
            <div class="payment-box">
                <div class="upper-box">
                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2">
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong><span
                                            class="small-text">Make your payment directly into our bank account. Please use
                                            your Order ID as the payment reference. Your order won’t be shipped until the
                                            funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Check Payments</strong><span class="small-text">Make your
                                            payment directly into our bank account. Please use your Order ID as the payment
                                            reference. Your order won’t be shipped until the funds have cleared in our
                                            account.</span></label>
                                </div>
                            </li>

                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3" checked>
                                    <label for="payment-3"><strong>Cash on Delivery</strong><span class="small-text">Pay
                                            when you get your product</span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lower-box">
                    <button type="button" id="submit-button" onclick="submitForm()" class="theme-btn btn-style-one"><span
                            class="btn-title">Place Order</span></button>
                </div>
            </div>
            <!--End Payment Box-->
        </div>
    </section>
@endsection
