<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    //
    public function show()
    {
        $houses = \App\Models\House::all();
        return view('submit', compact( 'houses'));
    }
    public function save(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'actor' => 'required|max:255',
            'description' => 'required|max:255',
            'house_id' => 'required|exists:houses,id',
        ]);
        $character = tap(new \App\Models\Character($data))->save();
        print('hola');
        return redirect()->route('zerrenda');
    }
}
