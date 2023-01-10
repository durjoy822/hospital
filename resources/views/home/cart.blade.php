@extends('home.layouts.master')
@section('content')
<section class="cart-section">
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
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="{{asset('assets/home/images/resource/products/cart-img.jpg')}}" alt=""></a></figure>
                                </div>
                            </td>
                            <td><h4 class="prod-title">Product Title</h4></td>
                            <td class="sub-total">$35.00</td>
                            <td>1</td>
                            {{-- <td class="qty"><div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div></td> --}}
                            <td class="total">$35.00</td>
                            <td><a href="#" class="remove-btn"><span class="fa fa-times"></span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cart-options clearfix">
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
            </div>
        </div>
        
        <div class="row justify-content-between">
            <div class="column pull-left col-lg-5 col-md-6 col-sm-12">
                <div class="shipping-block">
                    <div class="inner-box">
                        <h3>Free Shipping</h3>
                        <h4>Calculate Shipping</h4>
                        
                        <!-- Shipping Form -->
                        <div class="shipping-form">
                            <!--Shipping Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <input type="text" name="text" placeholder="Pakistan" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <input type="text" name="text" placeholder="Postcode / ZIP" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <input type="text" name="text" placeholder="State / County" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <button class="theme-btn totals-btn" type="submit" name="submit-form">Update Totals</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="column pull-right col-lg-6 col-md-6 col-sm-12">
                <!--Totals Table-->
                <ul class="totals-table">
                    <li><h3>Cart Totals</h3></li>
                    <li class="clearfix total"><span class="col">Sub Total</span><span class="col price">$35.00</span></li>
                    <li class="clearfix total"><span class="col">Total</span><span class="col price">$35.00</span></li>
                    <li class="text-right"><button type="submit" class="theme-btn proceed-btn">Proceed to Checkout</button></li>
                </ul>
            </div>  
        </div>
    </div>
</section>
@endsection