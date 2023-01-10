<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function appointment()
    {
        return view ('home.appointment');
    }
    public function doctor()
    {
        return view('home.doctor');
    }
    public function doctorDetails()
    {
        return view('home.doctorDetails');
    }
    public function departments()
    {
        return view ('home.department');
    }
    public function singleDepartment()
    {
        return view ('home.single-department');
    }
    public function blog()
    {
        return view ('home.blog');
    }
    public function product()
    {
        return view('home.product');
    }
    public function singleProduct()
    {
        return view('home.single-product');
    }
    public function cart()
    {
        return view('home.cart');
    }
    public function login()
    {
        return view('home.login');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function aboutUs()
    {
        return view('home.about-us');
    }
    public function services()
    {
        return view ('home.services');
    }
    public function gallery()
    {
        return view ('home.gallery');
    }
    public function priceTable()
    {
        return view ('home.priceTable');
    }
    public function comingSoon()
    {
        return view ('home.comingSoon');
    }
    public function error()
    {
        return view ('home.error');
    }
    public function terms()
    {
        return view ('home.terms');
    }
}
