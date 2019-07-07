<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerarPDFController extends Controller
{
    public function GenerarPDF(Request $request)
    {
        // $data = $datos;
        // $date = date('Y-m-d');
        // $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML('welcome');
        
        return $pdf->stream('reporte');
    //     if($tipo==2){return $pdf->download('reporte.pdf'); }
    // 
    }
}
