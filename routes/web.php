<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostCommentsController;

Route::post('newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index'])->name('name');
Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destory'])->middleware('auth');

//this is where the middleware for the admin is grouped

Route::middleware('can:admin')->group(function(){
    Route::get('admin/posts/create',[PostController::class, 'create']);
    Route::get('admin/posts',[AdminPostController::class, 'index']);
    Route::post('admin/posts',[PostController::class, 'store']);
    Route::get('admin/posts/{post}/edit',[AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post}',[AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}',[AdminPostController::class, 'destory']);
});
