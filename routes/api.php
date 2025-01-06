<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/welcome', function () {
    return response()->json([
        "status" => "success",
        "message" => "hii its welcome page",
        "data" => [
            "username" => "JohnDoe",
            "email" => "johndoe@example.com"
        ]
    ], 200);
});

Route::get('/users', [ManagerController::class, 'UsersListAPI']);
Route::get('/posts', [ManagerController::class, 'PostsAPI']);

Route::post('/signup', [SignupController::class, 'SignupAPI']);
Route::post('/login', [LoginController::class, 'LoginApi']);

Route::post('/profile', [ProfileController::class, 'ProfileAPI']);
