@extends('layouts.admin')
@section('title', 'posts')
@section('content')
    <h1>Posts page</h1>

    <table border=1>
    <tr>
    <th>id</th>
    <th>user ID</th>
    <th>image</th>
    <th>caption</th>
    <th>location</th>
    <th>created_at</th>
    </tr>

    @foreach($posts as $post)
    <tr>
        <td><h3>{{$post->id}}</h3></td>
        <td><h3>{{$post->user_id}}</h3></td>
        <td><img src="{{$post->image}}" alt="" width=50 height=50></td>
        <td><h3>{{$post->caption}}</h3></td>
        <td><h3>{{$post->location}}</h3></td>
        <td><h3>{{$post->created_at}}</h3></td>
    </tr>
    @endforeach
    </table>
@stop
