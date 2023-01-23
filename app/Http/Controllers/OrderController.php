<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\OrderInfo;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function saveShipping(Request $request)
    {
        $request->validate(
            [
                'name'  => 'required',
                'street'  => 'required',
                'state'  => 'required',
                'country'  => 'required',
                'city' => 'required',
                'postal_code' => 'required',
                'phone_number' => 'required',
            ],
            [
                'name.required' => 'please input your name!',
                'street.required' => 'please input your street!',
                'state.required' => 'please input your state!',
                'country.required' => 'please input your Country!',
                'city.required' => 'please input your City!',
                'postal_code.required' => 'please input your Postal code!',
                'phone_number.required' => 'please input your Phone number!',
            ]
        );
        $lastShipping = ShippingAddress::where('user_id', Auth::user()->id)->where('street', $request->street)->where('state', $request->state)->where('city', $request->city)->get();
        if (count($lastShipping) > 0) {
            $ship = ShippingAddress::where('user_id', Auth::user()->id)->where('street', $request->street)->where('state', $request->state)->where('city', $request->city)->first();
            $ship->name = $request->name;
            $ship->phone_number = $request->phone_number;
            $ship->is_default = $request->is_default;
            $ship->save();
        } else {
            $ship = new ShippingAddress();
            $ship->user_id = Auth::user()->id;
            $ship->name = $request->name;
            $ship->street = $request->street;
            $ship->state = $request->state;
            $ship->city = $request->city;
            $ship->postal_code = $request->postal_code;
            $ship->country = $request->country;
            $ship->phone_number = $request->phone_number;
            $ship->is_default = $request->is_default;
            $ship->save();
        }
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart) {
            $medicine = Medicine::findOrFail($cart->product_id);
            if ($medicine->quantity < $cart->quantity) {
                $myItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $cart->product_id)->first();
                $myItem->quantity = $medicine->quantity;
                $myItem->total_price = $medicine->quantity * $myItem->price;
                $myItem->save();
                $message = 'Sorry, There are '.$medicine->quantity. ' items of '.$medicine->name.' are available in our stock';
                Session::flash('success', $message);
                return redirect()->route('cart');
            }
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->shipping_id = $ship->id;
        $order->price = Cart::where('user_id', Auth::user()->id)->sum(('total_price'));
        $order->delivery_cost = 50;
        $order->total_price = $order->price + 50;
        $order->status = 'Orderd';
        $order->save();

        foreach ($carts as $cart) {
            $info = new OrderInfo();
            $info->order_id = $order->id;
            $info->product_id = $cart->product_id;
            $info->quantity = $cart->quantity;
            $info->price = $cart->price;
            $info->total_price = $cart->total_price;
            $info->save();

            $medicine = Medicine::findOrFail($cart->product_id);
            $medicine->quantity = $medicine->quantity - $cart->quantity;
            $medicine->save();

            Cart::findOrFail($cart->id)->delete();
        }
        Session::flash('success', 'Order placed successfully. Soon you will get a copy of the order invoice in your mail');
        return redirect()->route('home');
    }
}
