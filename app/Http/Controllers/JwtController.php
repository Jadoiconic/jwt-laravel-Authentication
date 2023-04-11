<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtController extends Controller
{
    public function generateToken(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        return response()->json(['token' => $token]);
    }

    public function refreshToken(Request $request)
    {
        try {
            $newToken = JWTAuth::refresh(JWTAuth::getToken());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }

        return response()->json(['token' => $newToken]);
    }
}

