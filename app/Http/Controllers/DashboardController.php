<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    public function Dashboard(){
        $user=Auth::user();

        $userData=User::get();

        //get posts data
        $posts=Post::with('user')->orderBy('created_at', 'ASC')->get();

        return view('dashboard', compact('user', 'userData', 'posts'));
    }
}
