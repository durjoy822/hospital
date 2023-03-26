<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class NewsletterController extends Controller
{
    public function newsletterIndex(){
        return view('admin.newsletter.index',[
            'subscriber'=>Newsletter::all(),
        ]);
    }
    public function newsletterStore( Request $request){
//        dd($request->all());
        $request->validate([
            'email' => ['required', 'email', function ($attribute, $value, $fail) {
                // Check if the domain of the email address is valid
                $domain = explode('@', $value)[1];
                if (!checkdnsrr($domain, 'MX')) {
                    $fail($attribute.' is invalid.');
                }
            }]
            ]);
        $subscriber=new Newsletter();
        $subscriber->email=$request->email;
        $subscriber->save();
        if ($subscriber->id){
            Session::flash('success','Subscribe successfully done!');
            return redirect()->back();
        }
    }
}
