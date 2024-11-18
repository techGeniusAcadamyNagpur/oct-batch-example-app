<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function Profile(){
        $user=Auth::user();
        return view('profile', compact('user'));
    }

    public function Update(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $mobile_no = $request->input('mobile_no');
        $password = $request->input('password');
        

        $update=User::findorfail($id);
        $update->name=$name;
        $update->user_name=$user_name;
        $update->email=$email;
        $update->mobile_no=$mobile_no;
        $update->password=$password;
        $update->save();

        return "success";
    }
}
