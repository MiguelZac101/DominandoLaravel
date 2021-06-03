<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){
        //return $request->get('name');
        $request->validate([
            'name' => 'required',
            'email' => ['required','email']
        ]);
        return "Datos validados";
    }
}
