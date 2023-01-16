<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.appointment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speciallist = Department::get();
        return view('admin.appointment.add',compact('speciallist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patientId'=>'required',
            'department'=>'required',
            'doctor'=>'required',
            'date'=>'required',
            'time'=>'required',
            'phone'=>'required',
        ]);

        $appointment = new Appointment();
        $appointment->patientId = $request->patientId;
        $appointment->department = $request->department;
        $appointment->doctor = $request->doctor;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->phone = $request->phone;
        $appointment->problem = $request->problem;
        $token=Appointment::where('date',$request->date)->count();
        $appointment->token = $token+1;
        $appointment->save();
        Session::flash('success','successfully store done!');
        return redirect()->route('appointment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speciallist = Department::get();
        return view('admin.appointment.edit',compact('speciallist'));
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
        $request->validate([
            'patientId'=>'required',
            'department'=>'required',
            'doctor'=>'required',
            'date'=>'required',
            'time'=>'required',
            'phone'=>'required',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->patientId = $request->patientId;
        $appointment->department = $request->department;
        $appointment->doctor = $request->doctor;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->phone = $request->phone;
        $appointment->problem = $request->problem;
        $token=Appointment::where('date',$request->date)->count();
        $appointment->token = $token+1;
        $appointment->save();
        Session::flash('success','successfully store done!');
        return redirect()->route('appointment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function findDoctor($id=null)
    {
        echo json_encode(Doctor::where('specialization',$id)->get());
    }
}
