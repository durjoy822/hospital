<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AdminAuthController extends Controller
{
    public function newAdmin(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required|min:8|max:64',
        ],
        [
            'name.required'=>'please input your name!',
            'email.required'=>'You forget to use your email!',
            'password.required'=>'password is required!',
            'password.min'=>'Minimum 8 digit is required!',
            'password.max'=>'More then 64 digit are not allowed!',
        ]
        );
        $admin=new Admin();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=FacadesHash::make($request->password);
        $admin->save();
        Auth::guard('admin')->login($admin);
        Session::flash('success', 'New admin registered successfully!');
        return redirect()->route('admin.dashboard');
    }
    public function authCheck(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            Session::flash('success', 'Login Success!');
            return redirect()->route('admin.dashboard');
        }
        Session::flash('warning', 'OPS! You provided wrong information');
        return redirect()->back();
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
