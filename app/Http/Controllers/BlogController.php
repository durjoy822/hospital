<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view ('admin.blog.index',compact('blogs'));
    }
    public function create()
    {
        return view ('admin.blog.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required',
            'picture'           => 'required',
            'details'           => 'required',
        ],
        [
            'title.required'=>'Title is required',
            'picture.required'=>'Picture is required',
            'details.required'=>'Details is required!',
        ]);

        $blog= new Blog();
        $blog->title = $request->title;
        $blog->details = $request->details;
        $blog->picture = $this->savePhoto($request);
        $blog->posted_by = FacadesAuth::guard('admin')->user()->name;
        $blog->save();
        Session::flash('success', 'successfully store done.');
        return redirect()->route('admin.blog');
    }
    public function savePhoto($request){
        $photo=$request->file('picture');
        $photoName=rand().'.'.$photo->extension();
        $dir='adminAsset/blog/picture/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
    public function show($id = null)
    {
        $blog = Blog::findOrFail($id);
        return view ('home.singleBlog',compact('blog'));
    }
    public function edit($id = null)
    {
        $blog = Blog::findOrFail($id);
        return view ('admin.blog.edit',compact('blog'));
    }
    public function update(Request $request, $id =null)
    {
        $request->validate([
            'title'   => 'required',
            'picture' => 'required',
            'details' => 'required',
        ],
        [
            'title.required'=>'Title is required',
            'picture.required'=>'Picture is required',
            'details.required'=>'Details is required!',
        ]);

        $blog= Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->details = $request->details;
        if($request->file('picture')){
            if($blog->picture !=null ){
                unlink($blog->picture );
            }
        $blog->picture = $this->savePhoto($request);
        }
        $blog->posted_by = FacadesAuth::guard('admin')->user()->name;
        $blog->save();
        Session::flash('success', 'successfully update done.');
        return redirect()->route('admin.blog');
    }
    public function distroy($id)
    {
        $blog=Blog::find($id);
        if($blog->picture){
            if(file_exists($blog->picture)){
                unlink($blog->picture);
            }
        }
        $blog->delete();
        Session::flash('success', 'Post deleted');
        return redirect()->back();
    }
}
