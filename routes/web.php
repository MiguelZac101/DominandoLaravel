<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','home' )->name('home');
Route::view('/about','about' )->name('about');
Route::get('/portafolio',PortafolioController::class)->name('portafolio');
Route::view('/contact','contact' )->name('contact');

Route::get('/enviarvariables', function () {
    $nombre = "Miguel";
    //formas de enviar variables
    return view('home',compact('nombre')); // compact('nombre') -> ['nombre' => $nombre]
    //return view('home',['nombre' => $nombre]);
    //return view('home')->with(['nombre' => $nombre]);
    //return view('home')->with('nombre',$nombre);
})->name('home');
