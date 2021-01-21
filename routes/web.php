<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;


Route::get('/', [PageController::class, 'index']);

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user/{id}/edit', [UserController::class, 'edit']);
// Route::get('/user/create', [UserController::class, 'create']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::put('/user/{id}', [UserController::class, 'update']);
// Route::delete('/user/{id}', [UserController::class, 'destroy']);
// Route::post('/user', [UserController::class, 'store']);

Route::resource('user', UserController::class);