<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //php artisan make:controller PortafolioController -i
    //es para cuando el controlador solo tiene una función
    public function __invoke(Request $request)
    {
        $portafolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];

        return view('portafolio', compact('portafolio'));
    }
}
