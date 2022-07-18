<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::resource('iphone', \App\Http\Controllers\IphoneController::class);
Route::resource('pay', \App\Http\Controllers\PayController::class);

//Route::get('/iphone', function () {
//    return view('iphone');
//});

