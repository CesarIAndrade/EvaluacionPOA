<!DOCTYPE html>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div>
    <img src="imagenes/header.png" style="width: 1050px;
        height:100px;
        align:center;">
</div>
@if(isset($mostrarSalvoconducto))
 @foreach ($mostrarSalvoconducto as $n)
<h2><center>{{$n->direccion}}</center></h2>
<b><h3><center>Cronograma de las rutas </center></h3></b>
<h4><center></center></h4>

@endforeach

<table border="1" style="font-family: Sans-serif;  font-size: 11px; text-align:center; width:100%; float: center; border-collapse:collapse;border-color:#ddd;" >
                
               

        <thead style="background-color:#b2e1e6">

            <tr>
                <th>Cod Vehic</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Placa</th>
                <th>Chofer</th>
                <th>Fecha de Salida</th>
                <th>Fecha de Llegada</th>
                <th>Hora de Salida</th>
                <th>Hora de Llegada</th>
                <th>Dirección</th>
                <th>Motivo</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($mostrarSalvoconducto as $n)
            <tr>
                <td>{{$n->vehiculo->codigo_vehiculo}}</td>
                <td>{{$n->vehiculo->descripcion}}</td>
                <td>{{$n->vehiculo->modelo}}</td>
                <td>{{$n->vehiculo->color}}</td>
                <td>{{$n->vehiculo->placa}}</td>
                <td>{{$n->persona->nombres}}</td>
                <td>{{$n->fecha_salida_solicitada}}</td>
                <td>{{$n->fecha_llegada_solicitada}}</td>
                <td>{{$n->hora_salida_solicitada}}</td>
                <td>{{$n->hora_llegada_solicitada}}</td>
                <td>{{$n->direccion}}</td>
                <td>{{$n->motivo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif 



