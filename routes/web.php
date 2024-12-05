<?php

use App\Http\Controllers\UserAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::post('/add_user', [UserAppController::class, 'create'])->name('add_user');
