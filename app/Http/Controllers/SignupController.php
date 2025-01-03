<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function Hi()
    {
        return ("hi class");
    }

    public function Addition($num1, $num2)
    {

        $result = $num1 + $num2;

        return $result;
    }

    public function Subtraction($num1, $num2)
    {

        $result = $num1 - $num2;

        return $result;
    }

    public function Multiply($num1, $num2)
    {

        $result = $num1 * $num2;

        return $result;
    }

    public function Calculator()
    {

        $do_addition = $this->Addition(10, 20);
        $do_sub = $this->Subtraction(50, 20);
        $do_multiply = $this->Multiply(50, 10);

        $final_result = "Addtion=" . $do_addition . "<br> Subtraction=" . $do_sub . "<br> Multiply=" . $do_multiply;

        return $final_result;

    }

    public function StringFunctionsDemo()
    {
        $string = "Sana Q";

        $length_result = strlen($string);
        $make_words_lower = strtolower($string);
        $make_words_upper_case = strtoupper($string);
        $find_substring = substr($string, 2);

        $do_addition = $this->Addition(50, 20);

        $final_result = "String is:" . $string . "<br>"
            . "Length=" . $length_result . "<br>"
            . "Lower Case=" . $make_words_lower . "<br>"
            . "Upper Case=" . $make_words_upper_case . "<br>"
            . "Substring=" . $find_substring . "<br>"
            . "do_addition=" . $do_addition . "<br>"
        ;

        return $final_result;
    }

    public function Signup(Request $request)
    {

        $contact = $request->input('contact');
        $password = $request->input('password');
        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $username = $request->input('username');

        $insert = new User;
        $insert->mobile_no = $contact;
        $insert->name = $full_name;
        $insert->email = $email;
        $insert->password = $password;
        $insert->user_name = $username;
        $insert->save();

        if ($insert) {
            $successMsg = "You have signed up successfully";

            return view('instagram_login', compact('successMsg', 'email'));

        } else {
            return "failed";
        }

    }

    public function SignupAPI(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // unique check for email
            'username' => 'required|string|unique:users,user_name|max:255', // unique check for username
            'password' => 'required|min:8|confirmed', // password confirmation should be present in 'password_confirmation' field
            'contact' => 'required|numeric|digits:10|unique:users,mobile_no', // assuming 10-digit contact numbers
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // If validation passes, proceed with user creation
        try {
            $insert = new User;
            $insert->mobile_no = $request->input('contact');
            $insert->name = $request->input('full_namexxxx');
            $insert->email = $request->input('email');
            $insert->user_name = $request->input('username');
            $insert->password = bcrypt($request->input('password')); // Hash the password
            $insert->save();

            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'data' => [],
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failure',
                'message' => 'Failed to signup. Please try again. due to some missfields',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
