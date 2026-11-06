<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [TaskController::class, 'today']);

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/profile', [UserController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);