<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function Dashboard(){
        $user=Auth::user();

        return view('dashboard', compact('user'));
    }
}
