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

    public function delete($id) {
      // busca si existe el chacarter 
        if (   $character = \App\Models\Character::find($id)){
            // lo borra
            $character->delete();
        }
        // redirige a la lista de personajes
        return redirect()->route('zerrenda');
        
       
    }
    public function edit($id){
        // busca el personaje por su id
        if ($character= \App\Models\Character::find($id)){
            // lo muestra en la vista de edicion
            return view('edit-character', ['character' => $character]);
        }
    }

    public function update(Request $request, $id){
        // busca el personaje por su id
        if ($character= \App\Models\Character::find($id)){
            // actualiza los datos
            $character->name = $request->name;
            $character->actor = $request->actor;
            $character->description = $request->description;
            $character->save();
        }
        // redirige a la lista de personajes
        return redirect()->route('zerrenda');
    }
}
