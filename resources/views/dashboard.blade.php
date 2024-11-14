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

    
    <h1>Users</h1>
    

    <table border=2>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile no</th>
            <th>Email</th>
        </tr>
        @foreach($userData as $eachUserData)
        <tr>
            <td>{{$eachUserData->id}}</td>
            <td>{{$eachUserData->name}}</td>
            <td>{{$eachUserData->mobile_no}}</td>
            <td>{{$eachUserData->email}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>