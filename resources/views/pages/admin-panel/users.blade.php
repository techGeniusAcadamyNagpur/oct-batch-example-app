@extends('layouts.admin')
@section('title', 'users')
@section('content')
<h1>Users</h1>

<table border=1>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td><h3>{{$user->id}}</h3></td>
        <td><img src="{{$user->profile_pic_path}}" alt="" width=50 height=50></td>
        <td><h3>{{$user->name}}</h3></td>
        <td><h3>{{$user->email}}</h3></td>
    </tr>
    @endforeach

</table>









@stop
