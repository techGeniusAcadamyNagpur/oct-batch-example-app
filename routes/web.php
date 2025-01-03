<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/instagram_login', function () {
    return view('instagram_login');
})->name('login');

Route::get('/instagram_signup', function () {
    return view('instagram_signup');
});

Route::get('/layout', function () {
    return view('layouts/default');
});

Route::get('/hi', [SignupController::class, 'Hi']);
Route::get('/addition', [SignupController::class, 'Addition']);
Route::get('/subtraction', [SignupController::class, 'Subtraction']);
Route::get('/string-fun-demo', [SignupController::class, 'StringFunctionsDemo']);
Route::get('/calculator', [SignupController::class, 'Calculator']);

Route::post('/signup', [SignupController::class, 'Signup']);

Route::post('/login', [LoginController::class, 'Login']);
Route::get('/logout', [LogoutController::class, 'Logout']);


Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'Profile'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'Update'])->middleware('auth');


//Posts
Route::get('/create_post', [PostsController::class, 'CreatePostScreen'])->middleware('auth');
Route::post('/create_post_backend', [PostsController::class, 'CreatePost'])->middleware('auth');


//Admin-panel
Route::get('/admin-dashboard', [AdminController::class, 'Dashboard'])->name('admin-dashboard');
Route::get('/admin-users', [AdminController::class, 'UsersPage'])->name('admin-users');
Route::get('/admin-posts', [AdminController::class, 'PostsPage'])->name('admin-posts');


//manager panel
Route::get('/layout/manager', function () {
    return view('layouts/manager');
});

Route::get('/manager-dashboard', [ManagerController::class, 'Dashboard'])->name('manager-dashboard');
Route::get('/manager-users', [ManagerController::class, 'UsersPage'])->name('manager-users');
Route::get('/manager-user-details/{id}', [ManagerController::class, 'UserDetails'])->name('manager-user-details');

Route::get('/manager-posts', [ManagerController::class, 'PostsPage'])->name('manager-posts');