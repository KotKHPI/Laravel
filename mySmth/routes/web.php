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

Route::get('/iphone', 'App\Http\Controllers\IphoneController@getIphones');
Route::get('/airpods', 'App\Http\Controllers\AirpodsController@getAirpods');
Route::get('/macbook', 'App\Http\Controllers\MacbookController@getMacbooks');
Route::get('/ipad', 'App\Http\Controllers\IpadController@getIpads');

