<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\CharacterController@show')->name(name: 'zerrenda');

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// get erakutsi formulario

Route::get('/submit', 'App\Http\Controllers\SubmitController@show');
// post bidali formularioa, eta controllerrean adierazita dago redirec atalean nora berdidali
Route::post('/submit', 'App\Http\Controllers\SubmitController@save');

// para borrar el character del registro
Route::delete('/delete-character/{id}', 'App\Http\Controllers\CharacterController@delete')->name('character.delete');

// para edirtar un personaje
Route::get('/edit-character/{id}', 'App\Http\Controllers\CharacterController@edit')->name('character.edit');
// para guardar los cambio editados 
Route :: put('/edit-character/{id}', 'App\Http\Controllers\CharacterController@update')->name('character.update');
