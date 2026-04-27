<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);


Route::resource('job', JobController::class);

Route::resource('blog', PostController::class);

Route::resource('comments', CommentController::class);

Route::resource('tags', TagController::class);




Route::get('/tags/test_many', [TagController::class, 'testManyToMany']);

