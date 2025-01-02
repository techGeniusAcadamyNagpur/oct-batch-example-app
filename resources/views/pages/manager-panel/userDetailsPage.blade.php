@extends('layouts.manager')
@section('content')
<h1>hi its users data page</h1>
<h2>Name:{{$userData->name}}</h2>
<h2>email:{{$userData->email}}</h2>
@stop