<?php

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

Auth::routes();

// Home
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// Periodos
Route::get('/periodo', function () {
    return view('GestionPeriodo.gestion_periodo');
});
Route::resource('/periodos', 'PeriodoController');

// Evaluacion Periodos
Route::resource('/evaluacion_poa', 'EvaluacionPoaController');



//evidencias
Route::get('/evidencias', function () {
    return view('GestionEvidencias.gestion_evidencias');
});
Route::resource('/evidencia', 'MetaEvaluacionController');

Route::get('/evidenciaDatos', 'MetaEvaluacionController@obtenerLista');

//Indicadores
Route::resource('/indicador', 'IndicadoresController');

//Metas
Route::resource('/meta', 'MetaController');

//Proyectos
Route::resource('/proyecto', 'ProyectosController');




