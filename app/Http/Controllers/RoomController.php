<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Room;
use Illuminate\Http\Request;
use Session;
class RoomController extends Controller
{
    public function roomIndex()
    {
        $this->room = Room::all();
        return view('admin.room.allRooms', [
            'rooms' => $this->room,
        ]);
    }

    public function roomAdd()
    {
       $doctors = Doctor::get();
        return view('admin.room.add',compact('doctors'));
    }

    public function roomSave(Request $request)
    {
        $request->validate([
            'room_number' => 'required',
            'room_type' => 'required',
            'patient_id' => 'required',
            'allotment_date' => 'required',
            'discharge_date' => 'required',
            'doctor_name' => 'required',
        ]);
        $this->room = new Room();
        $this->room->room_number = $request->room_number;
        $this->room->room_type = $request->room_type;
        $this->room->patient_id = $request->patient_id;
        $this->room->allotment_date = $request->allotment_date;
        $this->room->discharge_date = $request->discharge_date;
        $this->room->doctor_name = $request->doctor_name;
        $this->room->status = $request->status;
        $this->room->save();
        if ($this->room->id) {
            Session::flash('success', 'successfully store done!');
            return redirect(route('admin.room'));
        } else {
            Session::flash('warning', 'Holy guacamole! You should check in on some of those fields below.');
            return back();
        }
    }

    public function roomEdit($id)
    {
        $this->room = Room::find($id);
        $this->doctor = Doctor::all();
        return view('admin.room.edit', [
            'doctors' => $this->doctor,
            'rooms' => $this->room,
        ]);
    }

    public function roomUpdate(Request $request)
    {
        $this->room = Room::find($request->id);
        $this->room->room_number = $request->room_number;
        $this->room->room_type = $request->room_type;
        $this->room->patient_id = $request->patient_id;
        $this->room->allotment_date = $request->allotment_date;
        $this->room->discharge_date = $request->discharge_date;
        $this->room->doctor_name = $request->doctor_name;
        $this->room->status = $request->status;
        $this->room->save();
        if ($this->room->id) {
            Session::flash('success', 'successfully updated done!');
            return redirect(route('admin.room'));
        } else {
            Session::flash('warning', 'Holy guacamole! updated faild! ');
            return back();
        }
    }

    public function roomDelete(Request $request)
    {
        $this->room = Room::find($request->id);
        $this->room->delete();
        if ($this->room->id) {
            Session::flash('success', 'successfully Deleted!');
            return redirect(route('admin.room'));
        } else {
            Session::flash('warning', 'Holy guacamole! Deleted failed!.');
            return back();
        }

    }






//    public function roomStatus($id)
//    {
//        $this->room = Room::find($id);
//        if ($this->room->status == 1) {
//            $this->room->status=2;
//        } elseif ($this->room->status == 2) {
//            $this->room->status=3;
//        } else {
//            $this->room->status=1;
//        }
//        return back();
//
//    }
}
