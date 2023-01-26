<?php

namespace App\Http\Controllers;

use App\Models\UserAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserAppointmentController extends Controller
{
    public function userAppointment(Request $request)
    {
        $appointment = new UserAppointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->email = $request->email;
        $appointment->department = $request->department;
        $appointment->time = $request->time;
        $appointment->message = $request->message;
        $token=UserAppointment::where('date',$request->date)->count();
        $appointment->token = $token+1;
        $appointment->save();
        Session::flash('success','Your appointment request is successufy recorded. Soon you Will get confirmation email');
        return redirect()->route('home');
    }
}
