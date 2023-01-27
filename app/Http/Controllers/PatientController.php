<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{

    public function patientIndex(){
        return view('admin.patient.index',[
            'patients'=>Patient::latest()->get(),
        ]);
    }
    public function patientAdd(){
        return view('admin.patient.add');
    }
    public function patientSave(Request $request){

        $request->validate([
            'patient_name'  => 'required',
            'age'           => 'required',
            'phone'          => 'required|min:11|max:11',
            'date'           => 'required',
            'email' =>'required',
        ],
        [
            'patient_name.required'=>'please input your name!',
            'age.required'=>'write your age!',
            'phone.required'=>'phone is required!',
            'phone.min'=>'input minimum 11 number!',
            'email.required' => 'Email is required',
        ]

        );

        $patient= new Patient();
        $patient->patient_name=$request->patient_name;
        $patient->age=$request->age;
        $patient->phone=$request->phone;
        $patient->status=$request->email;
        $patient->date=$request->date;
        $patient->status=$request->status;
        $patient->save();
        if($patient->id){
            Session::flash('success', 'successfully store done! Please add payment now!');
            return redirect(route('admin.patient'));
        }else{
            Session::flash('warning', 'Holy guacamole! You should check in on some of those fields below.');
            return redirect()->back();
        }

    }
    public function patientEdit($id){
        $patient=Patient::find($id);
        return view('admin.patient.edit',[
            'patients'=> $patient,
        ]);
    }
    public function patientUpdate(Request $request){
        $request->validate([
            'patient_name'  => 'required',
            'age'           => 'required',
            'phone'           => 'required|min:11|max:11',
            'date'           => 'required',

        ],
        [
            'patient_name.required'=>'please input your name!',
            'age.required'=>'write your age!',
            'phone.required'=>'phone is required!',
            'phone.min'=>'input minimum 11 number!',
        ]

        );
        $patient=Patient::find($request->id);
        $patient->patient_name=$request->patient_name;
        $patient->age=$request->age;
        $patient->phone=$request->phone;
        $patient->email=$request->email;
        $patient->date=$request->date;
        $patient->status=$request->status;
        $patient->save();
        if($patient->id){
            Session::flash('success', 'successfully updated done! Please add payment now!');
            return redirect(route('admin.patient'));
        }else{
            Session::flash('warning', 'Holy guacamole! You should check in on some of those fields below.');
            return back();
        }

    }
    public function patientDelete(Request $request){
        $patient=Patient::find($request->id);
        $patient->delete();
        if($patient->id){
            Session::flash('success', 'successfully Deleted');
            return redirect(route('admin.patient'));
        }else{
            Session::flash('warning', 'Deleted failed');
            return back();
        }
    }
    public function singlePatient($id = null)
    {
        $patient = Patient::findOrFail($id);
        return view ('admin.patient.singlePatient',compact('patient'));
    }
}
