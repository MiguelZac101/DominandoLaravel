<?php

use Illuminate\Support\Facades\Route;

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

Route::get('contactame', function () {
    return "Sección de contactos";
})->name('contactos');

Route::get('/', function () {
    echo "<a href='".route('contactos')."'>Contactanos 1</a>";
});
