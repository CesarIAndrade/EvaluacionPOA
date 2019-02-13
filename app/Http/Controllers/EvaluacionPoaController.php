<?php

namespace App\Http\Controllers;

use App\EvaluacionPoa;
use Illuminate\Http\Request;
use Response;

class EvaluacionPoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $evaluacion_poa = EvaluacionPoa::all();
        return response::json($evaluacion_poa);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvaluacionPoa  $evaluacionPoa
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionPoa $evaluacionPoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvaluacionPoa  $evaluacionPoa
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionPoa $evaluacionPoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EvaluacionPoa  $evaluacionPoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluacionPoa $evaluacionPoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvaluacionPoa  $evaluacionPoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionPoa $evaluacionPoa)
    {
        //
    }

    public function obtenerActivos()
    {
        $valor="D";
        $evaluacion_poa = EvaluacionPoa::where('estado', $valor) ->get();
        return response::json($evaluacion_poa);
    }

    
}
