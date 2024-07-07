<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index']);
//using closures
Route::get('/hello', function () {
    // return view('welcome');
    return 'Hello World!';
});

Route::get('/hello1', function() {
    return 'Hello1';
});
