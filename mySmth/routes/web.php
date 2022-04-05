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

Route::get('/iphone', function () {
    return view('iphone');
});

