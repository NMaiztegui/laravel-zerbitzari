<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class ApiCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        

        return response()->json(character::all());
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save( Request $request)
    {
        //           

        $validated = $request->validate([
            'actor' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'house_id' => 'required|exists:houses,id',
        ]);
        
        $character = tap(new \App\Models\Character($validated))->save();
        
        return response()->json($character, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //
        return response()->json($character);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $id)
    {
        //
          // busca el personaje por su id
          if ($character= \App\Models\Character::find($id)){
            // actualiza los datos
            $character->name = $request->name;
            $character->actor = $request->actor;
            $character->description = $request->description;
            $character->house_id = $request->house_id;
            $character->save();
        }
        //findorfail

        
        return response()->json($character, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $id)
    {
        //findorfail
        $character = \App\Models\Character::findOrFail($id);
        $character->delete();
        return response()->json([null],status: 204);
    }
}
