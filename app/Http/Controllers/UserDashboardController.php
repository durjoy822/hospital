<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $info = UserInfo::where('user_id',Auth::user()->id)->first();
        return view('home.dashboard',compact('info'));
    }
}
