<?php

namespace App\Http\Controllers;

use App\MetaEvaluacion;
use App\EvaluacionPoa;
use App\Meta;
use App\Indicadores;
use App\Proyectos;
use Response;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetaEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MetaEvaluacion  $metaEvaluacion
     * @return \Illuminate\Http\Response
     */
    public function show(MetaEvaluacion $metaEvaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MetaEvaluacion  $metaEvaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(MetaEvaluacion $metaEvaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MetaEvaluacion  $metaEvaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MetaEvaluacion $metaEvaluacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MetaEvaluacion  $metaEvaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetaEvaluacion $metaEvaluacion)
    {
        //
    }

    public function ObtenerEvaluacion($id)
    {
        $metasEval=MetaEvaluacion::where('id_evaluacion', $id) ->get();
        return Response::json($metasEval);
    }

    public function buscar($id)
    {
        $metaeval=MetaEvaluacion::find($id);
        return Response::json($metaeval);
    }

    public function GuardarArchivo(Type $var = null)
    {
        # code...
    }
}