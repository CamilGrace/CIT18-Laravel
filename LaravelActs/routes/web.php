<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//Simple Routing
Route::get('/greet', function () {
    return ('Hello, Laravel!');
});

Route::get('/greetings', [GreetController::class, 'greetPage']);

//Migration and Models Activity
Route::resource('tasks', TaskController::class);