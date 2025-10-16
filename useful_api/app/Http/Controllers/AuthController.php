<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(AuthRequest $request)
    {
        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
            
        return response()->json([
            'message' => "Created",
            'user' => $user
        ],201);
    }

    public function login(AuthRequest $request)
    {
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json(['message'=>'Invalid login credentials'],401);
        }

        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json(['token'=>$token,'user_id'=>$user->id],200);
    }
}
