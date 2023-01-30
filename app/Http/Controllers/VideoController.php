<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    public function video()
    {
        return view('admin.video.index',[
            'videos'=>Video::all(),
        ]);
    }

    public function videoAdd()
    {
        return view('admin.video.add');
    }

    public function videoStore(Request $request)
    {
        $video = new Video();
        $video->title       = $request->title;
        $video->details     = $request->details;
        $video->video       = $request->video;
        $video->signature   = $this->saveFile($request, 'signature');
        $video->image_one   = $this->saveFile($request, 'image_one');
        $video->image_two   = $this->saveFile($request, 'image_two');
        $video->image_three = $this->saveFile($request, 'image_three');
        $video->save();
        if ($video->id){
            Session::flash('success', 'Successfully Store');
            return redirect(route('video.index'));
        }else{
            Session::flash('warning', 'Successfully store faild');
            return back();
        }
    }

    public function saveFile($request, $fieldName){
        $file = $request->file($fieldName);
        $fileName = rand().'.'.$file->getClientOriginalExtension();
        $dir = 'adminAsset/video/photo/';
        $imgUrl = $dir.$fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
    public function videoEdit($id){
        return view('admin.video.edit',[
            'video'=>Video::find($id),
        ]);
    }
    public function videoUpdate(Request $request){
//        dd($request->all());
        $video=Video::find($request->id);
        $video->title       = $request->title;
        $video->details     = $request->details;
        $video->video       = $request->video;
        if ($request->file('signature')){
            if ($video->signature !=null){
                unlink($video->signature);
            }
            $video->signature=$this->saveFile($request,'signature');
        }
        if ($request->file('image_one')){
            if ($video->image_one !=null){
                unlink($video->image_one);
            }
            $video->image_one   =$this->saveFile($request,'image_one');
        }
        if ($request->file('image_two')){
            if ($video->image_two !=null){
                unlink($video->image_two);
            }
            $video->image_two   = $this->saveFile($request,'image_two');
        }
        if ($request->file('image_three')){
            if ($video->image_three !=null){
                unlink($video->image_three);
            }
            $video->image_three = $this->saveFile($request,'image_three');
        }
        $video->save();
        if ($video->id){
            Session::flash('success','Updated Successfully');
            return redirect(route('video.index'));
        }else{
            Session::flash('warning','Updated failed ');
            return back();
        }
    }
    public function videoDelete(Request $request){
        $video=Video::find($request->id);
        if ($video->signature){
            if (file_exists('signature')){
                unlink($video->signature);
            }
        }
        if($video->image_one){
            if (file_exists('image_one')){
                unlink($video->image_one);
            }
        }
        if ($video->image_two){
            if (file_exists('image_two')){
                unlink($video->image_two);
            }
        }
        if ($video->image_three){
            if (file_exists($video->image_three)){
                unlink($video->image_three);
            }
        }
        $video->delete();
        if ($video->id){
            Session::flash('success','Successfully Deleted');
            return back();
        }else{
            Session::flash('warning','Delete falild');
            return back();
        }
    }
}
