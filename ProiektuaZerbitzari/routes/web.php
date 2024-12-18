<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\CharacterController@show')->name(name: 'zerrenda');

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// get erakutsi formulario

Route::get('/submit', 'App\Http\Controllers\SubmitController@show');
// post bidali formularioa, eta controllerrean adierazita dago redirec atalean nora berdidali
Route::post('/submit', 'App\Http\Controllers\SubmitController@save');

