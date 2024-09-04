<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

//Show post
Route::get('/', [PostController::class, 'index']);

//Authentication
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

//Create post view/create post when user is signed-in
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

//Show specific post
Route::get('/posts/{post}', [PostController::class, 'show']);

//Show edit view page owned by signed user
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'post');

//Update specific post owned by the signed user
Route::patch('/posts/{post}', [PostController::class, 'update']);

//Destroy/delete post owned by the signed user
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->middleware('auth')
    ->can('delete', 'post');

//Search routes
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);
