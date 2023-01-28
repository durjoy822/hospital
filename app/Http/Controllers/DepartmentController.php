<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Session ;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::latest()->get();
        return view('admin.department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $dep = new Department;
        $dep->name = $request->name;
        $dep->details = $request->details;
        $dep->image = $this->saveImage($request);
        $dep->save();
        if($dep->id){
            Session::flash('success','successfully store done!');
            return redirect(route('department.index'));
        }else{
            Session::flash('warning','Holy guacamole! You should check in on some of those fields below.');
            return back();
        }
    }
        public function saveImage($request){
            $image=$request->file('image');
            $imageName=rand().'.'.$image->extension();
            $dir='adminAsset/depImage/image/';
            $imgUrl=$dir.$imageName;
            $image->move($dir,$imageName);
            return $imgUrl;
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
        $dep=Department::find($id);
        return view('admin.department.edit',[
            'department'=>$dep,
            ]);
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
        $dep = Department::find($id);
        $dep->name = $request->name;
        $dep->details = $request->details;
        if($request->file('image')){
            if($dep->image !=null ){
                unlink($dep->image );
            }
            $dep->image =    $this->saveImage($request);
        }
        $dep->save();
        if($dep->id){
            Session::flash('success',' updated successfully!');
            return redirect(route('department.index'));
        }else{
            Session::flash('warning',' updated falid!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep=Department::find($id);
        if($dep->image){
            if(file_exists($dep->image)){
                unlink($dep->image);
            }
        }
        $dep->delete();
        if($id){
            Session::flash('success','successfully Deleted');
            return redirect(route('department.index'));
        }else{
            Session::flash('warning',' Deleted falid!');
            return back();
        }
    }
}
