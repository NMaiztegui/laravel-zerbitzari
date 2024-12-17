<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'App\Http\Controllers\CharacterController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/submit', 'App\Http\Controllers\SubmitController@show');
Route::post('/submit', 'App\Http\Controllers\SubmitController@save');

