<!DOCTYPE html>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <img src="imagenes/header.png" style="width: 1050px;
        height:100px;
        align:center;">


<h2><center>VEHÍCULOS DE GAD MUNICIPAL DEL CANTÓN CHONE</center></h2>

@if(isset($listavehiculos))


<table border="1" style="font-family: Sans-serif;  font-size: 9px; text-align:center; width:100%; float: center;">
                
               

        <thead style="background-color:#b2e1e6">

            <tr>
				<b><th>Cod Vehic</th> </b>
				<b><th>Placa</th> </b>
				<b><th>Tipo Vehiculo</th> </b>
				<b><th>Num Motor</th></b>
				<b><th>Estado</th></b>
				<b><th>Marca</th></b>
				<b><th>Cilindraje</th></b>
				<b><th>País de Origen</th></b>
				<b><th>Modelo</th></b>
				<b><th>Año de Fabricación</th></b>
				<b><th>Chasis</th></b>
				<b><th>Color</th></b>
				
               
            </tr>
        </thead>
        <tbody>
    @foreach ($listavehiculos as $n)
            <tr>
				<td>{{$n->codigo_vehiculo}}</td>
				<td>{{$n->placa}}</td>
				<td>{{$n->descripcion}}</td>
				<td>{{$n->num_motor}}</td>
				<td>{{$n->estado}}</td>
				<td>{{$n->marca->detalle}}</td>
				<td>{{$n->cilindraje}}</td>
				<td>{{$n->pais_origen}}</td>
				<td>{{$n->modelo}}</td>
				<td>{{$n->anio_fabricacion}}</td>
				<td>{{$n->chasis}}</td>
				<td>{{$n->color}}</td>

            </tr>
			@endforeach
        </tbody>
    </table>
	
@endif