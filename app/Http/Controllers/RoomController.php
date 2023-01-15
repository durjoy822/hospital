<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Room;
use Illuminate\Http\Request;
use Session;
class RoomController extends Controller
{
    public function roomIndex(){
        $this->room=Room::all();
        return view('admin.room.allRooms',[
            'rooms'=>$this->room,
        ]);
    }
    public function roomAdd(){
        $this->room=Doctor::all();
        return view('admin.room.add',[
            'doctors'=>$this->room,
        ]);
    }
    public function roomSave( Request $request){
//        dd($request->all());
        $this->room=new Room();
        $this->room->room_number    = $request->room_number;
        $this->room->room_type      = $request->room_type;
        $this->room->patient_id     = $request->patient_id;
        $this->room->allotment_date = $request->allotment_date;
        $this->room->discharge_date = $request->discharge_date;
        $this->room->doctor_name    = $request->doctor_name;
        $this->room->status         = $request->status;
        $this->room->save();
        if($this->room->id){
            Session::flash('success', 'successfully store done!');
            return redirect(route('admin.room'));
        }else{
            Session::flash('warning','Holy guacamole! You should check in on some of those fields below.');
            return back();
        }
    }
}
