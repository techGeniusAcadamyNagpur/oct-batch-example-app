<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/instagram_login', function () {
    return view('instagram_login');
});

Route::get('/instagram_signup', function () {
    return view('instagram_signup');
});
