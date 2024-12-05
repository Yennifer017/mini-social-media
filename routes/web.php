<?php

use App\Http\Controllers\PublicationController;
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

Route::get('/create_publication', function () {
    return view('create_publication');
});

Route::get('/view_publications', [PublicationController::class, 'viewPublications'])
    ->name('view_publications');

Route::get('/my_publications', [PublicationController::class, 'viewOwnedPublications'])
    ->name('my_publications');


Route::post('/add_user', [UserAppController::class, 'create'])->name('add_user');
Route::post('/check_user', [UserAppController::class, 'login'])->name('check_user');
Route::post('/add_publication', [PublicationController::class, 'create'])->name('add_publication');