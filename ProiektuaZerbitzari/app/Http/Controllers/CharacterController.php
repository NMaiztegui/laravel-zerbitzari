<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    //
    public function show() {
        $characters = \App\Models\Character::all();
        return view('character-list', ['characters' => $characters]);
    }
}
