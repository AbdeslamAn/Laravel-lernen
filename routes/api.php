<?php

use App\Http\Controllers\api\v1\PostApiController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function(){
    Route::apiResource('post', PostApiController::class);
});


Route::apiResource('comment', CommentController::class);

