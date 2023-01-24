<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserAuthController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('success', 'User registered successfully');
        Auth::login($user);
        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember_me'))) {
            Session::flash('success', 'Login success');
            return redirect()->route('home');
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('success', 'Logout success');
        return redirect()->route('home');
    }
    public function showForgotForm(){
        return view('home.user.forgot');
    }

    public function sendResetLink(Request $request){
         $request->validate([
             'email'=>'required|email|exists:users,email'
         ]);

         $token = \Str::random(64);
         DB::table('password_resets')->insert([
               'email'=>$request->email,
               'token'=>$token,
               'created_at'=>Carbon::now(),
         ]);

         $action_link = route('user.reset.password.form',['token'=>$token,'email'=>$request->email]);
         $body = "We are received a request to reset the password for <b>Origin Hospital </b> account associated with ".$request->email.". You can reset your password by clicking the link below";

        Mail::send('email.email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
              $message->from('hospital@adeveloper.info','Origin Hospital');
              $message->to($request->email,'Your name')
                      ->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
    }

    public function showResetForm(Request $request, $token = null){
        return view('home.user.reset')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token = DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{

            User::where('email', $request->email)->update([
                'password'=>Hash::make($request->password)
            ]);

            DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            Session::flash('success', 'New password is updated.');
            return redirect()->route('home');
        }
    }
}
