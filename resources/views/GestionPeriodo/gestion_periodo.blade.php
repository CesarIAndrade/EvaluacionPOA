
@extends('layouts.app')
@section('content')
<div class="container">
    <button class="btn btn-info" data-toggle="modal" data-target=".modal_gestion_periodos">cargar</button>
    @include('GestionPeriodo.modal_periodo')
    @include('GestionPeriodo.tabla_periodo')
</div>

<script src='js/GestionPeriodo.js'></script>
@endsection