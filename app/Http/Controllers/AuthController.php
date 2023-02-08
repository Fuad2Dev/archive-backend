<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json([
            'user' => $user,
            'access_token' => $user->createToken('Access Token')->plainTextToken
        ]);
    }

    public function login(LoginRequest $request)
    {
        // dd($request->safe(['email', 'password']));
        // dd(Auth::attempt($request->safe(['email', 'password'])));
        if (Auth::attempt($request->safe(['email', 'password'])))
            return response()->json([
                'user' => Auth::user(),
                'access_token' => Auth::user()->createToken('Access Token')->plainTextToken
            ]);
        else
            return response()->json([
                'message' => 'unknown user'
            ]);
    }
}
