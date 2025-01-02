<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;

class ManagerController extends Controller
{
    public function Dashboard()
    {

        $totalUsers = User::count();
        $totalPosts = Post::count();

        return view('pages/manager-panel/dashboard', compact('totalUsers', 'totalPosts'));
    }

    public function UsersPage()
    {

        $users = User::get();

        //alternate way via stored procedures
        $users = DB::select('CALL test()', []);

        return view('pages/manager-panel/users', compact('users'));
    }

    public function UserDetails($id)
    {
        
        $userData = User::where('id',$id)->first();

        return view('pages/manager-panel/userDetailsPage', compact('userData'));
    }

    public function PostsPage()
    {

        $posts = Post::get();

        //alternate way via stored procedures
        $posts = DB::select('CALL posts_data()', []);

        return view('pages/manager-panel/posts', compact('posts'));
    }
}
