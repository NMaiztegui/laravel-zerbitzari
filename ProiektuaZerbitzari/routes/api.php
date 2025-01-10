<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\ApiCharacterController;

// Route::apiResource('/character',ApiCharacterController::class);
Route::get('/character', [ApiCharacterController::class,'index']);
Route::get('/character/{character}', [ApiCharacterController::class,'show']);
Route::post('/character',[ApiCharacterController::class,'save']);
Route::put('/character/{character}',[ApiCharacterController::class,'update']);
Route::delete('/character/{character}',[ApiCharacterController::class,'destroy']);