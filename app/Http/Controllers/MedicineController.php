<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class MedicineController extends Controller
{
    public function index()
    {
        $medicine = Medicine::latest()->get();
        return view('admin.medicine.index', compact('medicine'));
    }
    public function create()
    {
        return view('admin.medicine.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'  => 'required',
                'price' => 'required',
                'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'details' => 'required',

            ],
            [
                'name.required' => 'Name is Required',
                'price.required' => 'Price is Required',
                'picture.required' => 'Picture is Required',
                'picture.image' => 'The :attribute must be a valid image file.',
                'picture.max' => 'More then 2 MB are not allowed.',
                'details.required' => 'Details is required',
                'quantity.required' => 'Quantity is required',
            ]
        );
        $medicine = new Medicine();
        $medicine->name = $request->name;
        $medicine->price = $request->price;
        $medicine->details = $request->details;
        $medicine->picture = $this->savePhoto($request);
        $medicine->quantity = $request->quantity;
        $medicine->save();
        Session::flash('success', 'Medicine stored successfully');
        return redirect()->route('medicine.index');
    }
    public function savePhoto($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('picture');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/medicine/photo/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
    public function edit($id=null)
    {
        $drug = Medicine::findOrFail($id);
        return view('admin.medicine.edit',compact('drug'));
    }
    public function update(Request $request, $id=null)
    {
        $request->validate(
            [
                'name'  => 'required',
                'price' => 'required',
                'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'details' => 'required',

            ],
            [
                'name.required' => 'Name is Required',
                'price.required' => 'Price is Required',
                'picture.image' => 'The :attribute must be a valid image file.',
                'picture.max' => 'More then 2 MB are not allowed.',
                'details.required' => 'Details is required',
                'quantity.required' => 'Quantity is required',
            ]
        );
        $medicine = Medicine::findOrFail($id);
        $medicine->name = $request->name;
        $medicine->price = $request->price;
        $medicine->details = $request->details;
        if($request->file('picture')){
            if($medicine->picture !=null ){
                unlink($medicine->picture );
                $medicine->picture = null;
            }
            $medicine->picture = $this->savePhoto($request);
        }
        $medicine->quantity = $request->quantity;
        $medicine->save();
        Session::flash('success', 'Medicine update successfully');
        return redirect()->route('medicine.index');
    }
    public function delete($id=null)
    {
        $medicine = Medicine::findOrFail($id);
        if($medicine->picture !=null ){
            unlink($medicine->picture );
        }
        $medicine->delete();
        Session::flash('success', 'Medicine removed successfully');
        return redirect()->route('medicine.index');
    }
    public function home()
    {
        $drugs = Medicine::where('quantity', '>', 0)->latest()->paginate(12);
        return view('home.product',compact('drugs'));
    }
    public function show($id =null)
    {
        $drug = Medicine::findOrFail($id);
        return view('home.single-product',compact('drug'));
    }
}
