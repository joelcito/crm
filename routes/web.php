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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

// Route::get('/', 'SocialController@inicio');

// CAMPANIA
Route::get('Campania/Listado', 'CampaniaController@listado');
Route::post('Campania/guarda', 'CampaniaController@guarda');
Route::post('Campania/ajaxListado', 'CampaniaController@ajaxListado');
Route::get('Campania/formulario', 'CampaniaController@formulario');

// FORMULARIO
Route::post('Formulario/guardaFormulario', 'FormularioController@guardaFormulario');

