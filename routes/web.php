<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::inertia('', 'Welcome');

Route::get('posts', [PostsController::class, 'index']);
