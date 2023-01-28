<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\UserAppointment;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::latest()->paginate(25);
        return view('admin.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speciallist = Department::get();
        return view('admin.appointment.add', compact('speciallist'));
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
            'patientId' => 'required',
            'department' => 'required',
            'doctor' => 'required',
            'date' => 'required',
            'time' => 'required',
            'phone' => 'required',
        ]);

        $appointment = new Appointment();
        $appointment->patientId = $request->patientId;
        $appointment->user_id = $request->user_id;
        $appointment->department = $request->department;
        $appointment->doctor = $request->doctor;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->phone = $request->phone;
        $appointment->problem = $request->problem;
        $token = Appointment::where('date', $request->date)->count();
        $appointment->token = $token + 1;
        $appointment->status = $request->status;
        $appointment->save();
        Session::flash('success', 'successfully store done!');
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
        $appointment = Appointment::findOrFail($id);
        $speciallist = Department::get();
        return view('admin.appointment.edit', compact('appointment', 'speciallist'));
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

        $appointment = Appointment::findOrFail($id);
        // $appointment->patientId = $request->patientId;
        // $appointment->department = $request->department;
        // $appointment->doctor = $request->doctor;
        $cdate = $appointment->date;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->phone = $request->phone;
        $appointment->problem = $request->problem;
        if ($cdate == $request->date) {
            $appointment->token = $appointment->token;
        } else {
            $token = Appointment::where('date', $request->date)->count();
            $appointment->token = $token + 1;
        }
        $appointment->status = $request->status;
        $appointment->save();
        Session::flash('success', 'successfully store done!');
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
        Appointment::destroy($id);
        Session::flash('success', 'Data destroy done!');
        return redirect()->back();
    }
    public function findDoctor($id = null)
    {
        echo json_encode(Doctor::where('specialization', $id)->get());
    }
    public function userAppointmnet()
    {
        $appointments = UserAppointment::latest()->get();
        return view('admin.appointment.appointmentRequest', compact('appointments'));
    }
    public function confirmAppointment($id = null)
    {
        $user = UserAppointment::findOrFail($id);
        $p = Patient::where('email', $user->email)->where('phone', $user->phone)->where('patient_name', $user->name)->get();
        $patient = Patient::where('email', $user->email)->where('phone', $user->phone)->where('patient_name', $user->name)->first();
        if (count($p) > 0) {
            $appointment = new Appointment();
            $appointment->patientId = $patient->id;
            $appointment->user_id = $user->user_id;
            $appointment->department = $user->department;
            $appointment->doctor = $user->doctor;
            $appointment->date = $user->date;
            $appointment->time = $user->time;
            $appointment->phone = $user->phone;
            $appointment->problem = $user->message;
            $token = Appointment::where('date', $user->date)->count();
            $appointment->token = $token + 1;
            $appointment->status = 'Active';
            $appointment->save();
            UserAppointment::findOrFail($id)->delete();
            Session::flash('success', 'Appointment request has benn updated');
            return redirect()->route('user.appointment.index');
        } else {
            $patient = new Patient();
            $patient->patient_name = $user->name;
            $patient->age = $user->age;
            $patient->phone = $user->phone;
            $patient->email = $user->email;
            $patient->save();

            $appointment = new Appointment();
            $appointment->patientId = $patient->id;
            $appointment->user_id = $user->user_id;
            $appointment->department = $user->department;
            $appointment->doctor = $user->doctor;
            $appointment->date = $user->date;
            $appointment->time = $user->time;
            $appointment->phone = $user->phone;
            $appointment->problem = $user->message;
            $token = Appointment::where('date', $user->date)->count();
            $appointment->token = $token + 1;
            $appointment->status = 'Approved';
            $appointment->save();
            UserAppointment::findOrFail($id)->delete();
            Session::flash('success', 'Appointment request has benn updated');
            return redirect()->route('user.appointment.index');
        }
    }
}
