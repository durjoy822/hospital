<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function setting(){
        return view('admin.settings.index',[
            'settings'=>Settings::all(),
        ]);
    }
    public function settingAdd(){
        return view('admin.settings.add');
    }
    public function settingStore(Request $request){
//            dd($request->all());
            $setting= new Settings();
            $setting->details=$request->details;
            $setting->time=$request->time;
            $setting->address=$request->address;
            $setting->city=$request->city;
            $setting->country=$request->country;
            $setting->link_one=$request->link_one;
            $setting->link_two=$request->link_two;
            $setting->link_three=$request->link_three;
            $setting->link_three=$request->link_three;
            $setting->link_four=$request->link_four;
            $setting->link_five=$request->link_five;
            $setting->phone=$request->phone;
            $setting->email=$request->email;
            $setting->copyright=$request->copy_r8;
            if($request->logo){
                $setting->logo=$this->saveLogo($request);
            }
            $setting->save();
            if ($setting->id){
                Session::flash('success','Store successfully');
                return redirect(route('setting.index'));
            }else{
                Session::flash('warning','Successfully Store faild');
                return back();
            }
    }

    public function saveLogo($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $logo=$request->file('logo');
        $logoName=$timestamp.'.'.$logo->extension();
        $dir='adminAsset/settingLogo/logo/';
        $imgUrl=$dir.$logoName;
        $logo->move($dir,$logoName);
        return $imgUrl;
    }
    public function settingEdit($id){
        $setting=Settings::find($id);
        return view('admin.settings.edit',[
            'setting'=>$setting,
        ]);
    }
    public function settingUpdate(Request $request){
//        dd($request->all());
        $setting= Settings::find($request->id);
        $setting->details=$request->details;
        $setting->time=$request->time;
        $setting->address=$request->address;
        $setting->city=$request->city;
        $setting->country=$request->country;
        $setting->link_one=$request->link_one;
        $setting->link_two=$request->link_two;
        $setting->link_three=$request->link_three;
        $setting->link_three=$request->link_three;
        $setting->link_four=$request->link_four;
        $setting->link_five=$request->link_five;
        $setting->phone=$request->phone;
        $setting->email=$request->email;
        $setting->copyright=$request->copy_r8;
        if($request->file('logo')){
            if($setting->logo !=null ){
                unlink($setting->logo );
            }
            $setting->logo =    $this->saveLogo($request);
        }
        $setting->save();
        if ($setting->id){
            Session::flash('success','Update successfully');
            return redirect(route('setting.index'));
        }else{
            Session::flash('warning','successfully Update faild');
            return back();
        }

    }

    public function settingDelete(Request $request){
        $setting=Settings::find($request->id);
        if ($setting->logo){
            if (file_exists($setting->logo)){
                unlink($setting->logo);
            }
        }
        $setting->delete();
        if ($setting->id){
            Session::flash('success','Delete successfully');
            return back();
        }else{
            Session::flash('warning','Delete faild');
            return back();
        }
    }

}
