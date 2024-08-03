<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Authentication
    public function loginform()
    {
        return view('users.login');
    }

    public function registerform()
    {
        return view('users.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->UserFbID = $request->UserFbID;
        $user->UserName = $request->UserName;

        if ($request->hasFile('UserFile')) {
            $user->UserFile = $request->file('UserFile')->store('uploads', 'public');
        }
        
        $user->UserEmail = $request->UserEmail;
        $user->UserPassword = Hash::make($request->UserPassword);
        $user->UserMobile = $request->UserMobile;
        $user->UserCountry = $request->UserCountry;
        $user->UserState = $request->UserState;
        $user->UserAddress = $request->UserAddress;
        $user->UserEmailCode = $request->UserEmailCode;
        $user->UserEmailVerify = $request->has('UserEmailVerify');
        $user->UserAbout = $request->UserAbout;
        $user->UserAccount = $request->UserAccount;
        $user->users_notify = $request->users_notify;
        $user->UserCreated = $request->UserCreated;
        $user->UserLoginDate = $request->UserLoginDate;
        $user->UserModified = $request->UserModified;
        $user->UserDelete = $request->UserDelete;
        $user->notify_status = $request->notify_status;

        $user->save();

        return redirect()->route('home')->with('success', 'User registered successfully');
    }
    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt($request->only('Admin_email', 'Admin_password'))) {
            return redirect()->route('admin-dashboard');
        };

        if (Auth::guard('web')->attempt($request->only('UserEmail', 'UserPassword'))) {
            return redirect()->route('home');
        }
        return back()->withErrors(['email' => 'These credentials do not match our records.']);

        // $user = User::where('UserEmail', $request->UserEmail)->first();

        // if ($user && Hash::check($request->UserPassword, $user->UserPassword)) {
        //     Auth::login($user);
        //     return redirect()->route('home');
        // } else {
        //     return redirect()->back()->withErrors([
        //         'password' => 'Invalid credentials.',
        //     ])->withInput();
        // }
    }

}
