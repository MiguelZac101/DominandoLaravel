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
        ],[
            'name.required' => __('I need your name'),
            'email.required' => 'Email requerido',
        ]);
        return "Datos validados";
    }
}
