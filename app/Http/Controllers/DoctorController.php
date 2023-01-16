<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;
use Session;

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

        $this->doctor= new Doctor();
        $this->doctor->name               =$request->name;
        $this->doctor->dob                =$request->dob;
        $this->doctor->specialization     =$request->specialization;
        $this->doctor->experience         =$request->experience;
        $this->doctor->age                =$request->age;
        $this->doctor->phone              =$request->phone;
        $this->doctor->email              =$request->email;
        $this->doctor->gender             =$request->gender;
        $this->doctor->details            =$request->details;
        $this->doctor->address            =$request->address;
        $this->doctor->working_days       =json_encode($request->working_days);
        $this->doctor->fees               =$request->fees;
        $this->doctor->availability       =$request->availability;
        $this->doctor->photo              =$this->savePhoto($request);
        $this->doctor->save();
        if($this->doctor->id){
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
        $this->doctor=Doctor::find($id);
        return view('admin.doctor.doctorDetails',[
            'doctor'=>$this->doctor,
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
        $this->doctor=Doctor::find($id);
        return view('admin.doctor.edit',[
            'doctor'=>$this->doctor,'speciallist' => Department::get(),
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
        $this->doctor=Doctor::find($id);
        $this->doctor->name               =$request->name;
        $this->doctor->dob                =$request->dob;
        $this->doctor->specialization     =$request->specialization;
        $this->doctor->experience         =$request->experience;
        $this->doctor->age                =$request->age;
        $this->doctor->phone              =$request->phone;
        $this->doctor->email              =$request->email;
        $this->doctor->gender             =$request->gender;
        $this->doctor->details            =$request->details;
        $this->doctor->address            =$request->address;
        $this->doctor->working_days       =json_encode($request->working_days);
        $this->doctor->fees               =$request->fees;
        $this->doctor->availability       =$request->availability;
        if($request->file('photo')){
            if($this->doctor->photo !=null ){
                unlink($this->doctor->photo );
            }
            $this->doctor->photo =    $this->savePhoto($request);
        }
        $this->doctor->save();
        if($this->doctor->id){
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
        return back();
    }


//    status function
    public function status($id){
        $this->doctor=Doctor::find($id);
        if($this->doctor->availability==1){
            $this->doctor->availability=0;
        }else{
            $this->doctor->availability=1;
        }
        $this->doctor->save();
        return back();
    }
}
