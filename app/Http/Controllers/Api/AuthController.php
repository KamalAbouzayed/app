<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && \Hash::check($request->password, $user->password)) {

            $token = $user->createToken('token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials'
        ], 404);
    }

    public function logout()
    {
        //
    }

    public function forgetPassword(Request $request)
    {
        //
    }

    public function verifyCode(Request $request)
    {
        //
    }


    public function resetPassword(Request $request)
    {
        //
    }
}
