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
Route::get('Campania/home', 'CampaniaController@home');
Route::get('Campania/formulario', 'CampaniaController@formulario');

// FORMULARIO
Route::post('Formulario/guardaFormulario', 'FormularioController@guardaFormulario');
Route::get('Formulario/listado', 'FormularioController@listado');

// VENDEDORES
Route::get('Vendedor/vendedores', 'VendedorController@vendedores');

// PERSONA
Route::get('Persona/listado', 'PersonaController@listado');

// MEDIO SEGUIMIENTO
Route::get('MedioSeguimietno/listado', 'MedioSeguimientoController@listado');


// MEDIO PUBLICITARIOS
Route::get('MedioPublicitario/listado', 'MedioPublicitarioController@listado');


// TIPOS DE CAMPANIA
Route::get('TipoCampania/listado', 'TipoCampaniaController@listado');

// ESTADO DE SEGUIMIENTO
Route::get('EstadoSeguimiento/listado', 'EstadoSeguimientoController@listado');

// ESTADO FINAL
Route::get('EstadoFinal/listado', 'EstadoFinalController@listado');

// ASIGNACIONES
Route::get('Asignacion/listado', 'AsignacionController@listado');