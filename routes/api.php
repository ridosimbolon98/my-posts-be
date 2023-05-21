<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AuthenticationController;

Route::get('/posts', [PostsController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/post/{id}', [PostsController::class, 'show'])->middleware(['auth:sanctum']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/tes', [AuthenticationController::class, 'tes']);

Route::get('/me', [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);
