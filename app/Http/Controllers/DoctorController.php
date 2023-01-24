<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.doctor.index',[
            'doctors'=>Doctor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speciallist = Department::get();
        return view('admin.doctor.create',compact('speciallist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'name'            => 'required',
            'dob'             => 'required',
            'specialization'  => 'required',
            'experience'      => 'required',
            'age'             => 'required',
            'phone'           => 'required|min:11|max:11',
            'email'           => 'required',
            'gender'          => 'required',
            'details'         => 'required',
            'address'         => 'required',
            'details'         => 'required',
//            'working_days'    => 'required',
            'fees'            => 'required',
            'availability'    => 'required',
            'photo'           => 'required',


        ],
            [
                'name.required'=>'please input your name!',
                'age.required'=>'write your age!',
                'phone.required'=>'phone is required!',
                'phone.min'=>'input minimum 11 number!',
                'dob.required'=>'Date of birth field required!',
            ]

        );

        $doctor= new Doctor();
        $doctor->name               =$request->name;
        $doctor->dob                =$request->dob;
        $doctor->specialization     =$request->specialization;
        $doctor->experience         =$request->experience;
        $doctor->age                =$request->age;
        $doctor->phone              =$request->phone;
        $doctor->email              =$request->email;
        $doctor->gender             =$request->gender;
        $doctor->details            =$request->details;
        $doctor->address            =$request->address;
        $doctor->working_days       =json_encode($request->working_days);
        $doctor->fees               =$request->fees;
        $doctor->availability       =$request->availability;
        $doctor->photo              =$this->savePhoto($request);
        $doctor->save();
        if($doctor->id){
            Session::flash('success','successfully store done!');
            return redirect(route('doctor.index'));
        }else{
            Session::flash('warning','Holy guacamole! You should check in on some of those fields below.');
            return back();
        }
        return back();



    }

    public function savePhoto($request){
        $photo=$request->file('photo');
        $photoName=rand().'.'.$photo->extension();
        $dir='adminAsset/doctorImage/photo/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.doctor.doctorDetails',[
            'doctor'=>$doctor,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.doctor.edit',[
            'doctor'=>$doctor,'speciallist' => Department::get(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor=Doctor::find($id);
        $doctor->name               =$request->name;
        $doctor->dob                =$request->dob;
        $doctor->specialization     =$request->specialization;
        $doctor->experience         =$request->experience;
        $doctor->age                =$request->age;
        $doctor->phone              =$request->phone;
        $doctor->email              =$request->email;
        $doctor->gender             =$request->gender;
        $doctor->details            =$request->details;
        $doctor->address            =$request->address;
        $doctor->working_days       =json_encode($request->working_days);
        $doctor->fees               =$request->fees;
        $doctor->availability       =$request->availability;
        if($request->file('photo')){
            if($doctor->photo !=null ){
                unlink($doctor->photo );
            }
            $doctor->photo =    $this->savePhoto($request);
        }
        $doctor->save();
        if($doctor->id){
            Session::flash('success','Information store successfully');
            return redirect(route('doctor.index'));
        }else{
            Session::flash('warning','Holy guacamole! You should check in on some of those fields below.');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Doctor::destroy($id);
        return redirect()->back();
    }


//    status function
    public function status($id){
        $doctor=Doctor::find($id);
        if($doctor->availability==1){
            $doctor->availability=0;
        }else{
            $doctor->availability=1;
        }
        $doctor->save();
        return back();
    }
}
