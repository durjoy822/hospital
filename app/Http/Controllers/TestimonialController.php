<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial.index',compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonial.create');
    }
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->review = $request->details;
        $testimonial->company_name = $request->company;
        if ($request->image) {
            $testimonial->image =  $this->saveFile($request, 'image');
        }
        $testimonial->save();
        return redirect()->route('admin.testimonial');
    }
    public function edit($id=null)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }
    public function update(Request $request, $id =null)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->review = $request->details;
        $testimonial->company_name = $request->company;
        if ($request->image) {
            $testimonial->image =  $this->saveFile($request, 'image');
        }
        $testimonial->save();
        return redirect()->route('admin.testimonial');
    }
    public function delete($id=null)
    {
        unlink(Testimonial::findOrFail($id)->image);
        Testimonial::findOrFail($id)->delete();
        return redirect()->route('admin.testimonial');
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
}
