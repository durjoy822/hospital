<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientIndex(){
        return view('admin.patient.index'); 
    }
}
