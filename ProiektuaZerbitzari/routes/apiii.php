<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;


// filepath: /c:/xampp/htdocs/laravel-zerbitzari/ProiektuaZerbitzari/routes/api.php
use App\Http\Controllers\ApiCharacterController;

Route::apiResource('/character','App\Http\Controllers\ApiCharacterController@index');
Route::get('/character', [CharacterController::class,'index']);
Route::get('/character/{id}', [CharacterController::class,'show']);
Route::post('/charater',[CharacterController::class,'store']);
Route::put('/character/{id}',[CharacterController::class,'update']);
Route::delete('/caharacter/{id}',[CharacterController::class,'destroy']);