<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Department;
use App\Models\Settings;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $info = UserInfo::where('user_id',Auth::user()->id)->first();
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.dashboard',compact('info','hospitalInfo','posts','departments'));
    }
}
