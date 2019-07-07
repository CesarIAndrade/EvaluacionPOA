@extends('layouts.app')
@section('content')
    @include('Reportes.prueba')
    <div class="container">
        <a onclick="Generarpdf()" class="btn btn-outline-success">Generar como pdf</a>
    </div>
    <script src='js/Reporte.js'></script>
@endsection
