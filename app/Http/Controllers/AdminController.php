<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{

    public function Dashboard(){

        $totalUsers=User::count();
        $totalPosts=Post::count();

        return view('pages/admin-panel/dashboard', compact('totalUsers','totalPosts'));
    }

    public function UsersPage(){

        $users=User::get();

        return view('pages/admin-panel/users', compact('users'));
    }

    public function PostsPage(){

        $posts=Post::get();

        return view('pages/admin-panel/posts', compact('posts'));
    }
}
