<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorHomeController extends Controller
{
    public function doctor()
    {
        $doctors = Doctor::inRandomOrder()->take(6)->get();
        $hospitalInfo = \App\Models\Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.doctor',compact('doctors','hospitalInfo','posts','departments'));
    }
    public function doctorDetails($id=null)
    {
        $doctor = Doctor::findOrFail($id);
        $doctors = Doctor::inRandomOrder()->take(4)->get();
        $hospitalInfo = \App\Models\Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.doctorDetails',compact('doctor','doctors','hospitalInfo','posts','departments'));
    }
}
