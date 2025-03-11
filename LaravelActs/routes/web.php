<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Simple Routing
Route::get('/greet', function () {
    return ('Hello, Laravel!');
});

Route::get('/greetings', [GreetController::class, 'greetPage']);