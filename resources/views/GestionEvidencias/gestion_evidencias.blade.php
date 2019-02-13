@extends('layouts.app')
@section('content')
<div class="container">
    @include('GestionEvidencias.modal_subida_evidencias')
    @include('GestionEvidencias.tabla_metas_evidencias')
</div>

<script src='js/GestionEvidencias.js'></script>
@endsection