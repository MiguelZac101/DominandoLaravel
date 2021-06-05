<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\MessageController;

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
Route::view('/quienes-somos','about' )->name('about');
//Route::get('/portafolio',PortafolioController::class)->name('portafolio');
Route::get('/portafolio',[ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/{project}',[ProjectController::class, 'show'])->name('projects.show');

Route::view('/contacto','contact' )->name('contact');
Route::post('/contact',[MessageController::class, 'store'])->name('messages.store');

//resource
Route::resource('Cursos', CursosController::class)->only('index');

Route::get('/enviarvariables', function () {
    $nombre = "Miguel";
    //formas de enviar variables
    return view('home',compact('nombre')); // compact('nombre') -> ['nombre' => $nombre]
    //return view('home',['nombre' => $nombre]);
    //return view('home')->with(['nombre' => $nombre]);
    //return view('home')->with('nombre',$nombre);
})->name('home');
