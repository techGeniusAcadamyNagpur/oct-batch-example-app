<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .box1{
            background-color:#f5f5f5;
            width: 400px;
            margin:auto;
            outline: solid 2px #c6c6c6;
        }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="/profile">Profile</a><br>
    <a href="/logout">Click to Logout</a>



    <center><h1>Welcome {{$user->name}}</h1></center>
    <center><h1>Username::::::: {{$user->user_name}}</h1></center>


    <a href="/create_post">Create Post</a>

    @foreach($posts as $post)
    <div class="box1">

    <!-- User detail start -->
    <img src="{{$post->user->profile_pic_path}}" alt="" width="50" height="50">
    <h1>{{$post->user->name}}</h1>
     <!-- User detail end -->

    <h3>{{$post->location}}</h3>
    <img src="{{url($post->image)}}" alt="" width="200" height="200">
    <h5>{{$post->caption}}</h1>
    </div>
    @endforeach
</body>
</html>
