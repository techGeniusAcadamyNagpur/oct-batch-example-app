<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return back()->withErrors([
                'email' => 'Invalid email OR Password',
            ]);
        }
    }

    public function LoginApi(Request $request)
    {

        // Define validation rules
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', // unique check for email
            'password' => 'required|min:4', // password confirmation should be present in 'password_confirmation' field
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $user = User::where('email', $email)->get();

            return response()->json([
                'status' => 'success',
                'message' => 'successfully logged in',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to login',
                'data' => [],
            ], 400);
        }
    }
}
