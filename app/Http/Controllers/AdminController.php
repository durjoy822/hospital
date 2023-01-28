<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\UserAppointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.loginForm');
    }
    public function dashboard()
    {
        $cData = [];
        $cData['pending'] = UserAppointment::where('status', 'pending')->count();
        $cData['active'] = Appointment::where('status', 'Active')->count();
        $cData['visited'] = Appointment::where('status', 'Visited')->count();
        $cData['canceled'] = Appointment::where('status', 'Cancled')->count();

        $appData = Patient::get();

        $appointmentData = Appointment::selectRaw('YEAR(date) year, QUARTER(date) quarter, COUNT(*) as count')
            ->groupBy('year', 'quarter')
            ->get();

        $app = [];
        foreach ($appointmentData as $appointment) {
            $app[] = [
                'y' => $appointment->year . ' Q' . $appointment->quarter,
                'Appointments' => $appointment->count,
            ];
        }

        $appointments = Appointment::latest()->take(6)->get();
        $doctors = Doctor::inRandomOrder()->take(4)->get();


        return view('admin.dashboard', compact('cData', 'appData','app','appointments','doctors'));
    }
    public function registerForm()
    {
        return view('admin.register');
    }
}
