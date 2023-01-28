<?php

namespace App\Http\Controllers;

use App\Events\OrderProcessed;
use App\Models\Cart;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\OrderInfo;
use App\Models\Review;
use App\Models\ShippingAddress;
use Carbon\Carbon;
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
                $message = 'Sorry, There are ' . $medicine->quantity . ' items of ' . $medicine->name . ' are available in our stock';
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
        $data = [];
        $data['order_id'] = $order->id;
        $data['delivery_cost'] = $order->delivery_cost;
        $data['total_price'] = $order->total_price;
        $data['street'] = $request->street;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['postal_code'] = $request->postal_code;
        $data['country'] = $request->country;
        $data['delevery_date'] = Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->tomorrow();
        event(new OrderProcessed($data));
        Session::flash('success', 'Order placed successfully. Soon you will get a copy of the order invoice in your mail');
        return redirect()->route('home');
    }
    public function orders()
    {
        $orders = Order::latest()->get();
        return view('admin.order.index', compact('orders'));
    }
    public function userOrder()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('home.orders', compact('orders'));
    }
    public function show($id = null)
    {
        $order = Order::findOrFail($id);
        $infos = OrderInfo::where('order_id', $order->id)->get();
        $ship = ShippingAddress::findorFail($order->shipping_id);
        return view('home.orderInfo', compact('order', 'infos', 'ship'));
    }
    public function update(Request $request, $id = null)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();
        Session::flash('success', 'Order Status updated Successfully');
        return redirect()->route('orders');
    }
    public function review(Request $request)
    {
        $count =  Review::where('order_id', $request->order_id)->where('product_id', $request->product_id)->get();
        if (count($count) > 0) {
            $review =  Review::where('order_id', $request->order_id)->where('product_id', $request->product_id)->first();
            $review->order_id = $request->order_id;
            $review->product_id = $request->product_id;
            $review->user_id = Auth::user()->id;
            $review->review = $request->review;
            $review->rating = $request->rating;
            $review->status = 0;
            $review->save();
            Session::flash('success', 'Review update Successfully');
            return redirect()->route('order.show', $request->order_id);
        } else {
            $review = new Review();
            $review->order_id = $request->order_id;
            $review->product_id = $request->product_id;
            $review->user_id = Auth::user()->id;
            $review->review = $request->review;
            $review->rating = $request->rating;
            $review->save();
            Session::flash('success', 'Review store Successfully');
            return redirect()->route('order.show', $request->order_id);
        }
    }
    public function index()
    {
        $reviews = Review::latest()->get();
        return view ('admin.review.index',compact('reviews'));
    }
    public function reviewUpdate(Request $request, $id=null)
    {
        $review = Review::findOrFail($id);
        $review->status = $request->status;
        $review->save();
        Session::flash('success', 'Review status updated');
        return redirect()->route('review.index');
    }
}
