<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        
        $token = $user->createToken('auth_token')->plainTextToken;

        $res = response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
        Auth::login($user);
        dd($res);
        // return response()->json([
        //     'access_token' => $token,
        //     'token_type' => 'Bearer',
        // ]);



        // return redirect()->intended('dashboard.dashboard');
    }


}