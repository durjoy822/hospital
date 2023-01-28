<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Session;

class ServiceController extends Controller
{
    public function service()
    {
        return view('admin.services.index',[
            'services'=>Service::latest()->all(),
            ]);
    }

    public function serviceAdd()
    {
        return view('admin.services.add');
    }

    public function serviceStore(Request $request)
    {
//     dd($request->all());
        $request->validate(
            [
                'title' => 'required',
                'details' => 'required',
                'icon' => 'required',
            ]);

        $service = new Service();
        $service->title = $request->title;
        $service->details = $request->details;
        $service->icon = $request->icon;
        $service->save();
        if ($service->id) {
            Session::flash('success', 'successfully store done.');
            return redirect(route('service.index'));
        } else {
            Session::flash('warning', 'successfully store falid.');
            return back();
        }
    }

    public function serviceEdit($id)
    {
        return view('admin.services.edit', [
            'service' => Service::find($id),
        ]);
    }

    public function serviceUpdate(Request $request)
    {
//        dd($request->all());
        $service = Service::find($request->id);
        $service->title = $request->title;
        $service->details = $request->details;
        $service->icon = $request->icon;
        $service->save();
        if ($service->id) {
            Session::flash('success', 'successfully Updated .');
            return redirect(route('service.index'));
        } else {
            Session::flash('warning', 'successfully Updated falid.');
            return back();
        }
    }

    public function serviceDelete(Request $request)
    {
        $service = Service::find($request->id);
        $service->delete();
        if ($service->id) {
            Session::flash('success', 'successfully Delete.');
            return redirect(route('service.index'));
        } else {
            Session::flash('warning', 'successfully Delete falid.');
            return back();
        }
    }
}
