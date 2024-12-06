@extends('layouts.default')
@section('content')
<a class="logout_btn" href="/logout">Click to Logout</a>
    <h1>Profile</h1>
    

    <h2>Edit Profile</h2>
    <div class="profile-box">
        <form method="post" action="/profile/update" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $user->id }}" placeholder="id" required>

            <img src="{{ $user->profile_pic_path }}" alt="" width="100" height="100">
            <input class="choose_btn" type="file" name="profile_pic" id="profile_pic"><br>
            <input type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Name" required><br>
            <input type="text" name="user_name" id="user_name" value="{{ $user->user_name }}" placeholder="User Name"
                required><br>
            <input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="Email" required><br>
            <input type="number" name="mobile_no" id="mobile_no" value="{{ $user->mobile_no }}"
                placeholder="Mobile No" required><br>
            <input type="password" name="password" id="password" value="" placeholder="Password"><br>
            <button>Update</button>
        </form>
    </div><br>

    
@stop

