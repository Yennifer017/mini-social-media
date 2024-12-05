<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserAppController;
use Illuminate\Support\Facades\Route;


//SINGLE VIEWS
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


//USERS
Route::post('/add_user', [UserAppController::class, 'create'])->name('add_user');
Route::post('/check_user', [UserAppController::class, 'login'])->name('check_user');

//PUBLICATIONS
Route::get('/create_publication', function () {
    return view('create_publication');
});

Route::get('/my_publications', [PublicationController::class, 'viewOwnedPublications'])
    ->name('my_publications');

Route::get('/view_publications', [PublicationController::class, 'viewPublications'])
    ->name('view_publications');

Route::post('/add_publication', [PublicationController::class, 'create'])
    ->name('add_publication');

Route::post('/edit_publication', [PublicationController::class, 'edit'])
    ->name('edit_publication');

Route::post('/delete_publication', [PublicationController::class, 'delete'])
    ->name('delete_publication');    

//COMMENTS
Route::post('/add_comment', [CommentController::class, 'create'])
    ->name('add_comment');    

Route::get('/view_comments/{id}', [CommentController::class, 'view'])
    ->name('view_comments');