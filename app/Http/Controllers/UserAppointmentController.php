<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Settings;
use App\Models\UserAppointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserAppointmentController extends Controller
{
    public function userAppointment(Request $request)
    {
        $request->validate(
            [
                'name'              => 'required',
                'phone'             => 'required',
                'email'             => 'required',
                'department'        => 'required',
                'doctor'            => 'required',
                'date'              => 'required',
                'time'              => 'required',
                'message'           => 'required',
                'age'               => 'required',

            ],
            [
                'name.required' => 'please input your name!',
                'phone.required' => 'phone is required!',
                'email.required' => 'Write your Email!',
                'department.required' => ' Please select a department!',
                'doctor.required' => ' Please select a doctor!',
                'date.required' => ' Please select a date!',
                'time.required' => ' Please select a time!',
                'message.required' => ' Please select a message!',
                'age.required'     => 'Age is required',
            ]

        );
        $appointment = new UserAppointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->email = $request->email;
        $appointment->age = $request->age;
        $appointment->department = $request->department;
        $appointment->doctor = $request->doctor;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->message = $request->message;
        $token = UserAppointment::where('date', $request->date)->count();
        $appointment->token = $token + 1;
        $appointment->save();
        Session::flash('success', 'Your appointment request is successufy recorded. Soon you Will get confirmation email');
        return redirect()->route('home');
    }
    public function findUserDoctor($id = null, $date = null)
    {
        $dayOfWeek = Carbon::parse($date)->dayOfWeek;
        echo json_encode(Doctor::where('specialization', $id)->where('availability',1)->where('working_days', 'like', '%' . $dayOfWeek . '%')->get());
    }
    public function userAppointmentStatus()
    {
        $appointments = Appointment::where('user_id',Auth::user()->id)->get();
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view ('home.userAppointmentStatus',compact('appointments','hospitalInfo','posts','departments'));
    }
}
