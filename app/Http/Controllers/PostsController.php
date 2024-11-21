<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Str;
use Auth;

class PostsController extends Controller
{
    public function CreatePostScreen(){
        $user=Auth::user();
        return view('posts/create_post', compact('user'));
    }

    public function CreatePost(Request $request)
    {

        $userId = $request->input('user_id');
        $image = $request->file('image');
        $caption = $request->input('caption');
        $location = $request->input('location');

        //process image start
        
        $fileName = $image->getClientOriginalName();

        $fileExtension = $image->getClientOriginalExtension();
        $generateNewName = Str::random(10) . "." . $fileExtension;

        $storeTofileSystem = $image->storeAs('uploads', $generateNewName, 'public');

        $imageRefName = "storage/uploads/" . $generateNewName;

        //process image end

        $create = new Post;
        $create->user_id = $userId;
        $create->image = $imageRefName;
        $create->caption = $caption;
        $create->location = $location;
        $create->save();

        return redirect('/dashboard');
    }
}
