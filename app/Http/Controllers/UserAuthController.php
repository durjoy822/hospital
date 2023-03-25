<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Department;
use App\Models\Settings;
use App\Models\User;
use App\Models\UserInfo;
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

        $info = new UserInfo();
        $info->user_id = $user->id;
        $info->save();

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
    public function showForgotForm()
    {
        $hospitalInfo = Settings::first();
        $posts = Blog::inRandomOrder()->take(3)->get();
        $departments = Department::inRandomOrder()->take(6)->get();
        return view('home.user.forgot',compact('hospitalInfo','posts','departments'));
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $token = \Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('user.reset.password.form', ['token' => $token, 'email' => $request->email]);
        $body = "We are received a request to reset the password for <b>Origin Hospital </b> account associated with " . $request->email . ". You can reset your password by clicking the link below";

        Mail::send('email.email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
            $message->from('hospital@adeveloper.info', 'Origin Hospital');
            $message->to($request->email, 'Your name')
                ->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('home.user.reset')->with(['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required',
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$check_token) {
            return back()->withInput()->with('fail', 'Invalid token');
        } else {

            User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            DB::table('password_resets')->where([
                'email' => $request->email
            ])->delete();
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            Session::flash('success', 'New password is updated.');
            return redirect()->route('home');
        }
    }
    public function updateUserInfo(Request $request)
    {
        if (Auth::check()) {
            $info = UserInfo::where('user_id',  Auth::user()->id)->first();
            if ($request->photo) {
                if ($info->photo != null) {
                    $link = $info->photo;
                    unlink($link);
                    $info->photo = null;
                }
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $info->photo = $this->savePhoto($request);
            }
            if ($request->age) {
                $info->birth_date = $request->age;
            }
            if ($request->phone) {
                $info->phone = $request->phone;
            }
            $info->save();

            $user = User::findOrfail(Auth::user()->id);
            if ($request->new_password) {
                $user->password = bcrypt($request->new_password);
            }
            if ($request->name) {
                $user->name = $request->name;
            }
            $user->save();
            Session::flash('success', 'New infos are updated.');
            return redirect()->route('user.profile', str_replace(" ", "-", $request->name));
        } else {
            return redirect()->route('login');
        }
    }
    public function savePhoto($request)
    {
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo = $request->file('photo');
        $photoName = $timestamp . '.' . $photo->extension();
        $dir = 'users/photo/';
        $imgUrl = $dir . $photoName;
        $photo->move($dir, $photoName);
        return $imgUrl;
    }
}
