<?php

namespace App\Http\Controllers;

use App\Mail\Contract;
use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Blog;
use App\Models\Carousel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public  function home(){
        $carousels = Carousel::get();
        return view('home.index',compact('carousels'));
    }
    public function appointment()
    {
        return view ('home.appointment');
    }
    public function departments()
    {
        $dep=Department::inRandomOrder()->take(6)->paginate(6);
        return view ('home.department',[
            'dep'=>$dep,
        ]);
    }
    public function singleDepartment($slug)
    {
        $singleDep=Department::where('name',$slug)->first();
        return view ('home.single-department',[
            'singleDep'=>$singleDep,
        ]);
    }
    public function blog()
    {
        $blogs = Blog::latest()->paginate(5);
        return view ('home.blog',compact('blogs'));
    }
    public function login()
    {
        return view('home.login');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function contactUs(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'phone'    => 'required',
            'email'    => 'required',
            'message'  => 'required',
        ],
        [
            'name.required'=>'please input your name!',
            'phone.required'=>'phone is required!',
            'message.required'=>'Message is required',
            'email.required' => 'Email is required',
        ]

        );
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        Mail::to('hospital@adeveloper.info')->send(new Contract($data));
        Session::flash('success', 'Your message has been sent to our operator team, Our team will call you soon');
        return redirect()->route('contact');

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
