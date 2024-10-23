<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    public function Logout(Request $request){
        Auth::logout();
        return redirect('/instagram_login');
    }
}
