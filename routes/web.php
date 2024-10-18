<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

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

Route::get('/hi', [SignupController::class, 'Hi']);
Route::get('/addition', [SignupController::class, 'Addition']);
Route::get('/subtraction', [SignupController::class, 'Subtraction']);
Route::get('/string-fun-demo', [SignupController::class, 'StringFunctionsDemo']);
Route::get('/calculator', [SignupController::class, 'Calculator']);

Route::post('/signup', [SignupController::class, 'Signup']);