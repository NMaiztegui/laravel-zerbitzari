<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;


// filepath: /c:/xampp/htdocs/laravel-zerbitzari/ProiektuaZerbitzari/routes/api.php
use App\Http\Controllers\ApiCharacterController;

Route::get('/character', [ApiCharacterController::class, 'index']);
