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

Route::resource('portafolio', ProjectController::class)
->parameters(['portafolio' => 'project'])
->names('projects');
/*
Route::get('/portafolio',[ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear',[ProjectController::class, 'create'])->name('projects.create');
Route::get('/portafolio/{project}/editar',[ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portafolio/{project}',[ProjectController::class, 'update'])->name('projects.update');
Route::post('/portafolio',[ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}',[ProjectController::class, 'show'])->name('projects.show');
Route::delete('/portafolio/{project}',[ProjectController::class, 'destroy'])->name('projects.destroy');
*/

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
