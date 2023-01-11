<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Session;

class PatientController extends Controller
{

    public function patientIndex(){
        return view('admin.patient.index',[
            'patients'=>Patient::all(),
        ]);
    }
    public function patientAdd(){
        return view('admin.patient.add');
    }
    public function patientSave(Request $request){

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

        $this->patient= new Patient();
        $this->patient->patient_name=$request->patient_name;
        $this->patient->age=$request->age;
        $this->patient->phone=$request->phone;
        $this->patient->date=$request->date;
        $this->patient->status=$request->status;
        $this->patient->save();
        if($this->patient->id){
            Session::flash('success', 'successfully store done! Please add payment now!'); 
            return redirect(route('admin.patient'));
        }else{
            Session::flash('warning', 'Holy guacamole! You should check in on some of those fields below.'); 
            return  back();
        }

    }
    public function patientEdit($id){
        $this->patient=Patient::find($id);
        return view('admin.patient.edit',[
            'patients'=> $this->patient,
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
        $this->patient=Patient::find($request->id);
        $this->patient->patient_name=$request->patient_name;
        $this->patient->age=$request->age;
        $this->patient->phone=$request->phone;
        $this->patient->date=$request->date;
        $this->patient->status=$request->status;
        $this->patient->save();
        if($this->patient->id){
            Session::flash('success', 'successfully updated done! Please add payment now!'); 
            return redirect(route('admin.patient'));
        }else{
            Session::flash('warning', 'Holy guacamole! You should check in on some of those fields below.'); 
            return back();
        }

    }
    public function patientDelete(Request $request){
        $this->patient=Patient::find($request->id);
        $this->patient->delete();
        if($this->patient->id){
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
