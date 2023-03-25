<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {

        $sponsors = Sponsor::get();
        return view('admin.sponsor.index', compact('sponsors'));
    }
    public function create()
    {

        return view('admin.sponsor.add');
    }
    public function store(Request $request)
    {
        $sponsor = new Sponsor();
        $sponsor->name = $request->name;
        $sponsor->link = $request->link;
        if ($request->logo) {
            $sponsor->logo =  $this->saveFile($request, 'logo');
        }
        $sponsor->save();
        return redirect()->route('admin.sponsor');
    }
    public function edit($id = null)
    {

        $sponsor = Sponsor::findOrFail($id);
        return view('admin.sponsor.edit', compact( 'sponsor'));
    }
    public function update(Request $request, $id = null)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->name = $request->name;
        $sponsor->link = $request->link;
        if ($request->logo) {
            $sponsor->logo =  $this->saveFile($request, 'logo');
        }
        $sponsor->save();
        return redirect()->route('admin.sponsor');
    }
    public function delete($id = null)
    {
        Sponsor::findOrFail($id)->delete();
        return redirect()->route('admin.sponsor');
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = rand() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
}
