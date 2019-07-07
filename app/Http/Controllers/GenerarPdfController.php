<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class GenerarPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function GenerarPDF(Request $request)
    {
        // $data = $datos;
        // $date = date('Y-m-d');
        // $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($request->ruta);
        
        return $pdf->stream('reporte');
    //     if($tipo==2){return $pdf->download('reporte.pdf'); }
    // 
    }
}
