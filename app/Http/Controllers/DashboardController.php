<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function Dashboard(){
        $user=Auth::user();

        $userData=User::get();

        return view('dashboard', compact('user', 'userData'));
    }
}
