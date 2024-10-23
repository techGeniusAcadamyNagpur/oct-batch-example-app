<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="/logout">Click to Logout</a>

    <center><h1>Welcome {{$user->name}}</h1></center>
    <center><h1>Username::::::: {{$user->user_name}}</h1></center>
</body>
</html>