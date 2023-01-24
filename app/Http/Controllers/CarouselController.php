<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use Session;
use Carbon\Carbon;

class CarouselController extends Controller
{
    public function carousel(){
        return view('admin.carousel.index',[
            'caro'=>Carousel::all(),
        ]);
    }
    public function carouselAdd(){
        return view('admin.carousel.add');
    }
    public function carouselStore(Request $request){
//     dd($request->all());
        $request->validate(
            [
                'title'  => 'required',
                'details' => 'required',
            ]);
     $caro= new Carousel();
     $caro->heading=$request->heading;
     $caro->title=$request->title;
     $caro->details=$request->details;
     $caro->icon=$request->icon;
     $caro->btnOne_name=$request->btnOne_name;
     $caro->btnOne_link=$request->btnOne_link;
     $caro->btnTwo_name=$request->btnTwo_name;
     $caro->btnTwo_link=$request->btnTwo_link;
     if ($request->image) {
         $caro->image = $this->saveImage($request);
     }

     $caro->save();
     if ($caro->id){
         Session::flash('success','successfully store done.');
         return redirect(route('carousel.index'));
     }else{
         Session::flash('warning','successfully store falid.');
         return back();
     }
    }

    public function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/carousel/image/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
    public function carouselEdit($id){
        return view('admin.carousel.edit',[
            'caro'=>Carousel::find($id),
        ]);
    }
    public function carouselUpdate(Request $request){
//        dd($request->all());
        $caro=Carousel::find($request->id);
        $caro->heading=$request->heading;
        $caro->title=$request->title;
        $caro->details=$request->details;
        $caro->icon=$request->icone;
        $caro->btnOne_name=$request->btnOne_name;
        $caro->btnOne_link=$request->btnOne_link;
        $caro->btnTwo_name=$request->btnTwo_name;
        $caro->btnTwo_link=$request->btnTwo_link;
        if($request->file('image')) {
            if ($caro->image !=null) {
                unlink($caro->image);
            }
            $caro->image = $this->saveImage($request);
        }
        $caro->save();
        if ($caro->id){
            Session::flash('success','successfully Updated .');
            return redirect(route('carousel.index'));
        }else{
            Session::flash('warning','successfully Updated falid.');
            return back();
        }
    }
    public function carouselDelete(Request $request){
        $caro=Carousel::find($request->id);
        if($caro->image){
            if(file_exists($caro->image)){
                unlink($caro->image);
            }
        }
        $caro->delete();
        if ($caro->id){
            Session::flash('success','successfully Delete.');
            return redirect(route('carousel.index'));
        }else{
            Session::flash('warning','successfully Delete falid.');
            return back();
        }
    }
}
