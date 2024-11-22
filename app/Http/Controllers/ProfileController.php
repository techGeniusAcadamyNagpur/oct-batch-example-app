<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Str;

class ProfileController extends Controller
{
    public function Profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function Update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $mobile_no = $request->input('mobile_no');
        $password = $request->input('password');

        $profilePic = $request->file('profile_pic');

        //process image start

        $fileName = $profilePic->getClientOriginalName();

        $fileExtension = $profilePic->getClientOriginalExtension();
        $generateNewName = Str::random(10) . "." . $fileExtension;

        $storeTofileSystem = $profilePic->storeAs('uploads/profile_pictures', $generateNewName, 'public');

        $profilePicRefName = "storage/uploads/profile_pictures/" . $generateNewName;

        //process image end

        $update = User::findorfail($id);
        $update->name = $name;
        $update->user_name = $user_name;
        $update->email = $email;
        $update->mobile_no = $mobile_no;
        $update->password = $password;
        $update->profile_pic_path = $profilePicRefName;
        $update->save();

        return "success";
    }
}
