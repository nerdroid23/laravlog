<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\Admin\PostsController as AdminPostsController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::prefix('cp')->group(function () {
        Route::get('posts', [AdminPostsController::class, 'index']);
        Route::post('posts', [AdminPostsController::class, 'store']);
        Route::get('posts/{post:uuid}/edit', [AdminPostsController::class, 'edit']);
        Route::patch('posts/{post:uuid}', [AdminPostsController::class, 'update']);
    });
});

Route::get('posts', [PostsController::class, 'index']);
Route::get('posts/{post:slug}', [PostsController::class, 'show']);
