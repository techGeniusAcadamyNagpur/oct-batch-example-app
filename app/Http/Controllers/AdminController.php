<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use DB;

class AdminController extends Controller
{

    public function Dashboard()
    {

        $totalUsers = User::count();
        $totalPosts = Post::count();

        return view('pages/admin-panel/dashboard', compact('totalUsers', 'totalPosts'));
    }

    public function UsersPage()
    {

        $users = User::get();

        //alternate way via stored procedures
        $users = DB::select('CALL test()', []);

        return view('pages/admin-panel/users', compact('users'));
    }

    public function PostsPage()
    {

        $posts = Post::get();

        //alternate way via stored procedures
        $posts = DB::select('CALL posts_data()', []);

        return view('pages/admin-panel/posts', compact('posts'));
    }
}
