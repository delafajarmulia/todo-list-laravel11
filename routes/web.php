<?php

use App\Http\Controllers\Todo\TodoController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

// Route::get('/todo', function(){
//     return view('todo.app');
// });

Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');