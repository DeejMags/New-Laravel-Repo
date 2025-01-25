<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet', function(){
    return view('greet');
});

Route::get('/hello', function(){
    return view('hello');
});

Route::get('/controller-greet', [GreetController::class, 'index']);
Route::get('/hello', [GreetController::class, 'hello']);