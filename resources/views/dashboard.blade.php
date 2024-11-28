<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #ffffff;
        }

        .box1 {
            background-color: #ffffff;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            padding: 25px;
            outline: solid 1px #ff9aca;
            box-shadow: 0px 0px 25px #ff9aca;
        }

        .profile_image img {
            border-radius: 50px;
            position: sticky;
        }

        .username {
            margin-top: -46px;
            margin-left: 60px;
            font-weight: 600;
            position: sticky;
        }

        .fa-map-marker {
            position: relative;
            margin-left: 60px;
            color: #4f4f4f;
        }

        .post_image {
            background-color: #e5eeff;
            margin-top: 10px;
        }

        .post_image img {
            width: 400px;
            height: 300px;
        }

    </style>
</head>

<body>
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
        <div class="box1">

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
</body>

</html>
