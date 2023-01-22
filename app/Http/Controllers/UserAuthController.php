<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserAuthController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('success', 'User registered successfully');
        Auth::login($user);
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember_me'))) {
            Session::flash('success', 'Login success');
            return redirect()->route('home');
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('success', 'Logout success');
        return redirect()->route('home');
    }
}
