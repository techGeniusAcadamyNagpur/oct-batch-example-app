<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Str;
use Validator;

class ProfileController extends Controller
{
    public function Profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function ProfileAPI(Request $request)
    {

        // Define validation rules
        $validator = Validator::make($request->all(), [
            'userId' => 'required', // unique check for email
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $userId = $request->input('userId');

        $user = User::where('id', $userId)->get();

        if (count($user) > 0) {
            //if user found
            return response()->json([
                'status' => 'success',
                'message' => 'Profile fetched successfully',
                'data' => $user,
            ], 200);

        } else {
            //if user not found
            return response()->json([
                'status' => 'failure',
                'message' => 'User not found!!!!!!!!!!',
                'data' => $user,
            ], 400);
        }

    }

    public function Update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $mobile_no = $request->input('mobile_no');
        $password = $request->input('password');

        //process image start
        $profilePicCheck = $request->has('profile_pic');

        if ($profilePicCheck) {
            $profilePic = $request->file('profile_pic');

            $fileName = $profilePic->getClientOriginalName();

            $fileExtension = $profilePic->getClientOriginalExtension();
            $generateNewName = Str::random(10) . "." . $fileExtension;

            $storeTofileSystem = $profilePic->storeAs('uploads/profile_pictures', $generateNewName, 'public');

            $profilePicRefName = "storage/uploads/profile_pictures/" . $generateNewName;
        }

        //process image end

        $update = User::findorfail($id);
        $update->name = $name;
        $update->user_name = $user_name;
        $update->email = $email;
        $update->mobile_no = $mobile_no;

        if ($password != null) {
            $update->password = $password;
        }

        if ($profilePicCheck) {
            $update->profile_pic_path = $profilePicRefName;
        }

        $update->save();

        return redirect('/profile');
    }
}
