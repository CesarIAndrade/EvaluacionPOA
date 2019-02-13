@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    @include('GestionEvidencias.modal_subida_evidencias')
    @include('GestionEvidencias.tabla_metas_evidencias')
</div>

<script src='js/GestionEvidencias.js'></script>
@endsection