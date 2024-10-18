<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function Calculator(){

        $do_addition=$this->Addition(10, 20);
        $do_sub=$this->Subtraction(50, 20);
        $do_multiply=$this->Multiply(50, 10);

        $final_result="Addtion=".$do_addition."<br> Subtraction=".$do_sub."<br> Multiply=".$do_multiply;

        return $final_result;

    }

    public function StringFunctionsDemo()
    {
        $string = "Sana Q";

        $length_result = strlen($string);
        $make_words_lower = strtolower($string);
        $make_words_upper_case = strtoupper($string);
        $find_substring = substr($string, 2);

        $do_addition=$this->Addition(50, 20);

        $final_result = "String is:" . $string . "<br>"
            . "Length=" . $length_result . "<br>"
            . "Lower Case=" . $make_words_lower . "<br>"
            . "Upper Case=" . $make_words_upper_case . "<br>"
            . "Substring=" . $find_substring . "<br>"
            . "do_addition=" . $do_addition . "<br>"
        ;

        return $final_result;
    }

    public function Signup(Request $request){

        $contact=$request->input('contact');
        $password=$request->input('password');
        $full_name=$request->input('full_name');
        $email=$request->input('email');
        $username=$request->input('username');

        $insert=new User;
        $insert->name=$full_name;
        $insert->email=$email;
        $insert->password=$password;
        $insert->save();

        if($insert){
            return view('/instagram_login');
        }else{
            return "failed";
        }
        
    }
}
