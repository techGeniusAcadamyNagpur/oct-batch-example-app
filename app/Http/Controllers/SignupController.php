<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function Hi(){
        return ("hi class");
    }

    public function Addition(){
        $num1=10;
        $num2=20;
        $sum=$num1+$num2;

        $result="The result is ".$sum;

        return $result;
    }

    public function Subtraction(){
        $num1=10;
        $num2=20;
        $subtraction=$num1-$num2;

        $result="The result is".$subtraction;
        
        return $result;
    }

    public function StringFunctionsDemo(){
        $string="Tejaswi M";

        $length_result=strlen($string);
        $make_words_lower=strtolower($string);
        $make_words_upper_case=strtoupper($string);
        $find_substring=substr($string,2);

    
        return $find_substring;
    }
}
