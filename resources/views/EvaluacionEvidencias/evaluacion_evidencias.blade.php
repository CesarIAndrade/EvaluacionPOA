@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    @include('EvaluacionEvidencias.modal_evaluar_evidencias')
    @include('EvaluacionEvidencias.tabla_evaluacion_evidencias')
</div>

<div class="row container">
    <button type = "button" id = "id">Probar Modal</button>
</div>
<script src='js/EvaluacionEvidencias.js'></script>
@endsection