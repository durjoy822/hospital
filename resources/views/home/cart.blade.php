@extends('home.layouts.master')
@section('content')
    <section class="cart-section pt-2">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Preview</th>
                                <th class="prod-column">product</th>
                                <th class="price">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="prod-column">
                                        <div class="column-box">
                                            @php $product = \App\Models\Medicine::findOrFail($cart->product_id) @endphp
                                            <figure class="prod-thumb"><a href="{{route('medicine.show',$product->id)}}"><img
                                                        src="{{ asset($product->picture) }}" alt=""></a></figure>
                                        </div>
                                    </td>
                                    <td>
                                        <h4 class="prod-title">{{$product->name}}</h4>
                                    </td>
                                    <td class="sub-total">{{$cart->price}}</td>
                                    <td>{{$cart->quantity}}</td>
                                    <td class="total">{{$cart->total_price}}</td>
                                    <td><a href="{{route('cart.delete',$cart->id)}}" class="remove-btn"><span class="fa fa-times"></span></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn coupon-btn">Apply Coupon</button>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="theme-btn cart-btn">update cart</button>
                    </div>
                </div> --}}
            </div>

            <div class="row justify-content-between">
                <div class="column pull-left col-lg-5 col-md-6 col-sm-12">
                    <div class="shipping-block">

                    </div>
                </div>

                <div class="column pull-right col-lg-6 col-md-6 col-sm-12">
                    <!--Totals Table-->
                    <ul class="totals-table">
                        <li>
                            <h3>Cart Totals</h3>
                        </li>
                        <li class="clearfix total"><span class="col">Sub Total</span><span
                                class="col price">{{\App\Models\Cart::where('user_id',Auth::user()->id)->sum(('total_price'))}} TK</span></li>
                                <li class="clearfix total"><span class="col">Delevery Charge</span><span class="col price">50.00 TK</span>
                        <li class="clearfix total"><span class="col">Total</span><span class="col price">{{\App\Models\Cart::where('user_id',Auth::user()->id)->sum(('total_price'))+50.00}} TK</span>
                        </li>
                        <li class="text-right"><a href="{{route('checkout')}}" class="theme-btn proceed-btn">Proceed to
                                Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
