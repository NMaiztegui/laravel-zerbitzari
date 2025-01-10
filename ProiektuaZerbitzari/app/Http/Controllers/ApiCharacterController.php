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
    public function store( Request $request)
    {
        //           

        $validated = $request->validate([
            'actor' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'house_id' => 'required|exists:houses,id',
        ]);
    
        $character = Character::create($validated);
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
    public function update(Request $request, Character $character)
    {
        //
        $validated = $request->validate([
            'actor' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'house_id' => 'required|exists:houses,id',
        ]);
    
        $character = Character::update($validated);
        return response()->json($character, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        //

        $character->delete();
        return response()->json([null],status: 204);
    }
}
