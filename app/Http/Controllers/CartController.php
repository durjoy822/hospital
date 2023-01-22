<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart($id = null)
    {
        if (Auth::check()) {
            $cartInfo = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->get();
            if (count($cartInfo) > 0) {
                $myItem =Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
                $myItem->quantity = $myItem->quantity + 1;
                $myItem->save();
                Session::flash('success', 'Medicine cart update successfully');
                return redirect()->route('product');
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->quantity = 1;
                $cart->price = Medicine::findOrFail($id)->price;
                $cart->save();
                Session::flash('success', 'Medicine carted successfully');
                return redirect()->route('product');
            }
        }else{
            return redirect()->route('login');
        }
    }
}
