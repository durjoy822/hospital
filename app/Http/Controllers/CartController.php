<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('home.cart', compact('carts'));
    }
    public function bag($id = null)
    {
        if (Auth::check()) {
            $cartInfo = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->get();
            if (count($cartInfo) > 0) {
                $myItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
                $myItem->quantity = $myItem->quantity + 1;
                $myItem->total_price = $myItem->quantity * $myItem->price;
                $myItem->save();
                Session::flash('success', 'Medicine cart update successfully');
                return redirect()->route('cart');
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->quantity = 1;
                $cart->price = Medicine::findOrFail($id)->price;
                $cart->total_price = $cart->quantity * $cart->price;
                $cart->save();
                Session::flash('success', 'Medicine carted successfully');
                return redirect()->route('cart');
            }
        } else {
            return redirect()->route('login');
        }
    }
    public function postCart(Request $request)
    {
        if (Auth::check()) {
            $id = $request->product_id;
            $cartInfo = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->get();
            if (count($cartInfo) > 0) {
                $myItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
                $myItem->quantity = $myItem->quantity + $request->quantity;
                $myItem->total_price = $myItem->quantity * $myItem->price;
                $myItem->save();
                Session::flash('success', 'Medicine cart update successfully');
                return redirect()->route('cart');
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->quantity = $request->quantity;
                $cart->price = Medicine::findOrFail($id)->price;
                $cart->total_price = $cart->quantity * $cart->price;
                $cart->save();
                Session::flash('success', 'Medicine carted successfully');
                return redirect()->route('cart');
            }
        } else {
            return redirect()->route('login');
        }
    }
    public function cartDelete($id = null)
    {
        Cart::findOrFail($id)->delete();
        Session::flash('success', 'Medicine removed from cart successfully');
        return redirect()->route('cart');
    }
    public function checkout()
    {
        $bags = Cart::where('user_id',Auth::user()->id)->get();
        return view ('home.checkout',compact('bags'));
    }
}
