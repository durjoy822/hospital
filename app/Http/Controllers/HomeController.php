<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Blog;

class HomeController extends Controller
{
    public function appointment()
    {
        return view ('home.appointment');
    }
    public function departments()
    {
        $this->dep=Department::inRandomOrder()->take(6)->paginate(6);
        return view ('home.department',[
            'dep'=>$this->dep,
        ]);
    }
    public function singleDepartment($slug)
    {
        $this->singleDep=Department::where('name',$slug)->first();
        return view ('home.single-department',[
            'singleDep'=>$this->singleDep,
        ]);
    }
    public function blog()
    {
        $blogs = Blog::latest()->paginate(5);
        return view ('home.blog',compact('blogs'));
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
