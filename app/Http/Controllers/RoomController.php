<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class RoomController extends Controller
{
    public function roomIndex()
    {
        $room = Room::all();
        return view('admin.room.allRooms', [
            'rooms' => $room,
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
        $room = new Room();
        $room->room_number = $request->room_number;
        $room->room_type = $request->room_type;
        $room->patient_id = $request->patient_id;
        $room->allotment_date = $request->allotment_date;
        $room->discharge_date = $request->discharge_date;
        $room->doctor_name = $request->doctor_name;
        $room->status = $request->status;
        $room->save();
        if ($room->id) {
            Session::flash('success', 'successfully store done!');
            return redirect(route('admin.room'));
        } else {
            Session::flash('warning', 'Holy guacamole! You should check in on some of those fields below.');
            return back();
        }
    }

    public function roomEdit($id)
    {
        $room = Room::find($id);
        $doctor = Doctor::all();
        return view('admin.room.edit', [
            'doctors' => $doctor,
            'rooms' => $room,
        ]);
    }

    public function roomUpdate(Request $request)
    {
        $room = Room::find($request->id);
        $room->room_number = $request->room_number;
        $room->room_type = $request->room_type;
        $room->patient_id = $request->patient_id;
        $room->allotment_date = $request->allotment_date;
        $room->discharge_date = $request->discharge_date;
        $room->doctor_name = $request->doctor_name;
        $room->status = $request->status;
        $room->save();
        if ($room->id) {
            Session::flash('success', 'successfully updated done!');
            return redirect(route('admin.room'));
        } else {
            Session::flash('warning', 'Holy guacamole! updated faild! ');
            return back();
        }
    }

    public function roomDelete(Request $request)
    {
        $room = Room::find($request->id);
        $room->delete();
        if ($room->id) {
            Session::flash('success', 'successfully Deleted!');
            return redirect(route('admin.room'));
        } else {
            Session::flash('warning', 'Holy guacamole! Deleted failed!.');
            return back();
        }

    }


}
