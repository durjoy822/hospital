<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Payment;
use App\Models\PaymentService;
use Session;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::get();
        return view('admin.payment.index',compact('payments'));
    }
    public function create()
    {
        $speciallist = Department::get();
        return view('admin.payment.create', compact('speciallist'));
    }
    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->pId = $request->pId;
        $payment->patient_name = $request->patientName;
        $payment->department = $request->department;
        $payment->doctor = $request->doctor;
        $payment->admit = $request->admit;
        $payment->discharge = $request->discharge;
        $payment->save();

        for ($i = 0; $i < count($request->service); $i++) {
            $payment_services = new PaymentService();
            $payment_services->payment_id = $payment->id;
            $payment_services->service = $request->service[$i];
            $payment_services->cost = $request->cost[$i];
            $payment_services->save();
        }
        $ammount = PaymentService::where('payment_id', $payment->id)->sum('cost');
        $payment = Payment::findOrFail($payment->id);
        $payment->ammount = $ammount;
        $payment->discount = $request->discount;
        $payment->type = $request->type;
        $payment->type_info = $request->type_info;
        $percentageValue = round($ammount * ($request->discount / 100));
        $paid = round($ammount - $percentageValue);
        $payment->paid = $paid;
        $payment->status = $request->status;
        $payment->save();
        Session::flash('success','Payment successfully recorded!');
        return redirect()->route('payment.create');
    }
    public function invoice($id = null)
    {
        $payment = Payment::findOrFail($id);
        $paymentServices = PaymentService::where('payment_id', $payment->id)->get();
        return view('admin.payment.invoice',compact('payment','paymentServices'));
    }
}