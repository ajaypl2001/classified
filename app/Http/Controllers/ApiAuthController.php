<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $user = ApiUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return response()->json(['message' => 'User registered successfully', 'data'=>$user], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        if (Auth::guard('api_users')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('api_users')->user();
    
            return response()->json([
                'message' => 'You have logged in!',
                'user' => $user,
            ]);
        } else {
            return response()->json(['message' => 'Invalid credentials!'], 401);
        }
    }

    public function getdata(){
        $data=ApiUser::all();
        return response()->json(['data'=>$data]);
    }
}
