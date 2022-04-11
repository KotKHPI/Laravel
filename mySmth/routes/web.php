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

Route::get('/infoIphone', 'App\Http\Controllers\IphoneController@iphoneForm') -> name('iphoneForm');
Route::get('/infoMacbook', 'App\Http\Controllers\MacbookController@macbookForm') -> name('macbookForm');
Route::get('/infoIpad', 'App\Http\Controllers\IpadController@ipadForm') -> name('ipadForm');
Route::get('/infoAirpods', 'App\Http\Controllers\AirpodsController@airpodsForm') -> name('airpodsForm');
