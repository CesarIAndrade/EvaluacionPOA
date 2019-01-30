
@extends('layouts.app')
@section('content')
<div class="container">
    @include('GestionPeriodo.modal_periodo')
    @include('GestionPeriodo.tabla_periodo')
</div>

<script src='js/GestionPeriodo.js'></script>
@endsection