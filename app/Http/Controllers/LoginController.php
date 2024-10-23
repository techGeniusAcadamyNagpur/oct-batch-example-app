<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function Login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $credentials=$request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);
        
        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }else{
           return back()->withErrors([
            'email'=>'Invalid email OR Password',
           ]);
        }
    }
}
