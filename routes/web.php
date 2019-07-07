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
Route::get('/', function () {return view('welcome');});
Route::get('/home', 'HomeController@index')->name('home');

// Gestion de evidencias
Route::resource('/evidencia', 'MetaEvaluacionController');
Route::get('/evidencias', function () {return view('GestionEvidencias.gestion_evidencias');});
Route::get('/MetaEvaluacion/{id}', 'MetaEvaluacionController@ObtenerEvaluacion');
Route::post('/subirEvidencia/{id}', 'MetaEvaluacionController@GuardarArchivo');
Route::get('/buscarEvidencia/{id}', 'MetaEvaluacionController@buscar');
Route::post('/evaluarEvidencia/{id}', 'MetaEvaluacionController@GuardarEvaluacion');

// Periodos
Route::resource('/periodos', 'PeriodoController');
Route::get('/periodo', function () {return view('GestionPeriodo.gestion_periodo');});

// Evaluacion Periodos
Route::resource('/evaluacion_poa', 'EvaluacionPoaController');
Route::put('/periodo/{id}', 'EvaluacionPoaController@actualizar_periodo_evaluacion');
Route::get('evaluacion_poas/{id}','EvaluacionPoaController@BuscarPeriodo');
Route::get('poaActivos','EvaluacionPoaController@obtenerActivos');

//Indicadores
Route::resource('/indicador', 'IndicadoresController');
Route::get('/Indicador/{id}', 'IndicadoresController@buscar');

//Metas
Route::resource('/meta', 'MetaController');
Route::get('/Meta/{id}', 'MetaController@buscar');

//Proyectos
Route::resource('/proyecto', 'ProyectosController');

// Evaluacion Evidencias
Route::get('/evaluacion_evidencias', function () {return view('EvaluacionEvidencias.evaluacion_evidencias');});
//Rutas Api EvaluacionMetas para llenar la tabla
Route::get('/evaluacionRutas', 'EvaluacionesRutasController@ObtenerEvaluaciones');
