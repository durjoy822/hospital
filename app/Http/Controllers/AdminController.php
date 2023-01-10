<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.loginForm');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function registerForm()
    {
        return view('admin.register');
    }
}
