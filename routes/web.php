<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::post('/logout', [AuthController::class, 'logout']);

//task
Route::get('/tasks', [TaskController::class, 'index'])
    ->middleware('auth');

Route::get('/tasks/create', [TaskController::class, 'create'])
    ->middleware('auth');

Route::post('/tasks', [TaskController::class, 'store'])
    ->middleware('auth');

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);