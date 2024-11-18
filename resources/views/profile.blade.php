<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
<center>
    <h2>Edit Profile</h2>
    <form method="post" action="/profile/update">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$user->id}}" placeholder="id" required><br>
            <input type="text" name="name" id="name" value="{{$user->name}}" placeholder="Name" required><br>
            <input type="text" name="user_name" id="user_name" value="{{$user->user_name}}" placeholder="User Name" required><br>
            <input type="email" name="email" id="email" value="{{$user->email}}" placeholder="Email" required><br>
            <input type="number" name="mobile_no" id="mobile_no" value="{{$user->mobile_no}}" placeholder="Mobile No" required><br>
            <input type="password" name="password" id="password" value="" placeholder="Password" required><br>
            <button>Update</button>
        </form>
</center>
</body>
</html>