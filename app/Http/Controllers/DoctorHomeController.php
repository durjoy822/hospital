<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorHomeController extends Controller
{
    public function doctor()
    {
        return view('home.doctor');
    }
    public function doctorDetails()
    {
        return view('home.doctorDetails');
    }
}
