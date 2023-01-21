<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorHomeController extends Controller
{
    public function doctor()
    {
        $doctors = Doctor::inRandomOrder()->take(6)->get();
        return view('home.doctor',compact('doctors'));
    }
    public function doctorDetails($id=null)
    {
        $doctor = Doctor::findOrFail($id);
        $doctors = Doctor::inRandomOrder()->take(4)->get();
        return view('home.doctorDetails',compact('doctor','doctors'));
    }
}
