<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #fafafa;
        }

        .box1 {
            background-color: aliceblue;
            width: 370px;
            margin: auto;
            padding: 39px;
            border-radius: 20px;
        }

        .box1 img {
            border-radius: 50px;
            margin-left: 125px;
            box-shadow: 0px 0px 50px #c900ff;
        }

        .box1 input {
            height: 30px;
            margin: 3px;
            width: -webkit-fill-available;
        }

        .box1 button {
            height: 40px;
            width: -webkit-fill-available;
            background-color: orange;
            color: aliceblue;
            font-weight: bolder;
            border-radius: 10px;
            border-color: floralwhite;
            font-family: callibri;
        }

        .box1 button:hover {
            box-shadow: 10px 10px 50px orange;
        }

        .choose_btn {
            background-color: aqua;
            color: aliceblue;
            font-weight: bolder;
            border-radius: 10px;
            border-color: floralwhite;
        }

        .box2 {
            background-color: aliceblue;
            width: 370px;
            margin: auto;
            padding: 39px;
            border-radius: 20px;
        }

        .logout_btn {
            border-radius: 25px;
            color: red;
            float:right;
        }

    </style>
</head>

<body>
<a class="logout_btn" href="/logout">Click to Logout</a>
    <h1>Profile</h1>
    

    <h2>Edit Profile</h2>
    <div class="box1">
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
</body>

</html>
