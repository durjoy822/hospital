<?php

namespace App\Http\Controllers;

use App\Mail\Contract;
use App\Mail\RequestAppointment;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\Testimonial;
use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Blog;
use App\Models\Carousel;
use App\Models\Settings;
use App\Models\Video;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public  function home()
    {
        $carousels = Carousel::latest()->get();
        $upperCarousel   = Service::where('section', 0)->get();
        $services   = Service::where('section', 1)->get();
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        $video=Video::first();
        $sponsors=Sponsor::all();
        $testimonial=Testimonial::all();
        return view('home.index', compact('carousels', 'upperCarousel', 'services', 'hospitalInfo','posts','departments','video','sponsors','testimonial'));
    }
    public function appointment()
    {
        return view('home.appointment');
    }
    public function departments()
    {
        $dep = Department::inRandomOrder()->take(6)->paginate(6);
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.department', [
            'dep' => $dep,
            'hospitalInfo' => $hospitalInfo,
            'posts' => $posts,
            'departments' => $departments,
        ]);
    }
    public function singleDepartment($slug)
    {
        $singleDep = Department::where('name', $slug)->first();
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.single-department', [
            'singleDep' => $singleDep,
            'hospitalInfo' => $hospitalInfo,
            'posts' => $posts,
            'departments' => $departments,
        ]);
    }
    public function blog()
    {
        $blogs = Blog::latest()->paginate(5);
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.blog', compact('blogs', 'hospitalInfo','posts','departments'));
    }
    public function login()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.login',compact('hospitalInfo','posts','departments'));
    }
    public function contact()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.contact',compact('hospitalInfo','posts','departments'));
    }
    public function contactUs(Request $request)
    {
        $request->validate(
            [
                'name'     => 'required',
                'phone'    => 'required',
                'email'    => 'required',
                'message'  => 'required',
            ],
            [
                'name.required' => 'please input your name!',
                'phone.required' => 'phone is required!',
                'message.required' => 'Message is required',
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
    public function contactUsAppointment(Request $request)
    {
        $request->validate(
            [
                'name'     => 'required',
                'phone'    => 'required',
                'email'    => 'required',
                'message'  => 'required',
            ],
            [
                'name.required' => 'please input your name!',
                'phone.required' => 'phone is required!',
                'message.required' => 'Message is required',
                'email.required' => 'Email is required',
            ]

        );
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        $data['doctor_name'] = $request->doctor_name;
        Mail::to('hospital@adeveloper.info')->send(new RequestAppointment($data));
        Session::flash('success', 'Your message has been sent to our operator team, Our team will call you soon');
        return redirect()->route('home');
    }
    public function aboutUs()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.about-us', compact('hospitalInfo','posts','departments'));
    }
    public function services()
    {
        $hospitalInfo = Settings::first();
        $services = Service::where('section', 1)->get();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.services', compact('services', 'hospitalInfo','posts','departments'));
    }
    public function gallery()
    {
        $hospitalInfo =Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.gallery', compact('hospitalInfo','posts','departments'));
    }
    public function priceTable()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.priceTable', compact('hospitalInfo','posts','departments'));
    }
    public function comingSoon()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.comingSoon', compact('hospitalInfo','posts','departments'));
    }
    public function error()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.error', compact('hospitalInfo','posts','departments'));
    }
    public function terms()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.terms', compact('hospitalInfo','posts','departments'));
    }
}
