@extends('layouts.default')
@section('content')
    <h1>Dashboard</h1>
    <a href="/profile">Profile</a><br>
    <a href="/logout">Click to Logout</a>



    <center>
        <h1>Welcome {{ $user->name }}</h1>
    </center>
    <center>
        <h1>Username::::::: {{ $user->user_name }}</h1>
    </center>


    <a href="/create_post">Create Post</a>

    @foreach($posts as $post)
        <div class="posts-box">

            <!-- User detail start -->
            <div class="profile_image">
                <img src="{{ $post->user->profile_pic_path }}" alt="" width="50" height="50">
            </div>


            <div class="username">
                <lable>{{ $post->user->name }}</lable>
            </div>

            <!-- User detail end -->

            <i class="fa fa-map-marker" aria-hidden="true"> {{ $post->location }}</i> <br>

            <div class="post_image">
                <img src="{{ url($post->image) }}" alt="" width="200" height="200">
            </div>

            <lable>{{ $post->caption }}</lable>
        </div><br>
    @endforeach
@stop

