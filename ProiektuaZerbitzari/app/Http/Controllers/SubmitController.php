<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    //
    public function show()
    {
        return view('submit');
    }
    public function save(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'actor' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $character = tap(new \App\Models\Character($data))->save();
        print('hola');
        return redirect()->route('zerrenda');
    }
}
