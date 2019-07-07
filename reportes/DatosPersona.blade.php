<!DOCTYPE html>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 


<img src="imagenes/header.png" style="width: 1050px;
        height:100px;
        align:center;">


<h2 align="center">PERSONAL DEL SISTEMA MANTENIMIENTO VEHICULAR</h2>


@if(isset($mostrarPersona))

<table border="1" style="font-family: Sans-serif;  font-size: 11px; text-align:center; width:100%; float: center; border-collapse:collapse;border-color:#ddd;" >
  	<thead style="background-color:#b2e1e6">
	    <tr>
	      <th scope="col">DNI</th>
	      <th scope="col">NOMBRES</th>
	      <th scope="col">DIRECCIÓN</th>
	      <th scope="col">TELEFONO</th>
	      <th scope="col">LICENCIA</th>
	      <th scope="col">SEXO</th>
	      <th scope="col">CORREO</th>
	      <th scope="col">TIPO DE PERSONA</th>
	


	    </tr>
  	</thead>

	<tbody >
	
		@foreach ($mostrarPersona as $n)
			<tr>
				<td>{{$n->dni}}</td> 
				<td>{{$n->nombres}}</td>
				<td>{{$n->direccion}}</td>
				<td>{{$n->telefono}}</td>
				<td>{{$n->licencia}}</td>
				<td>{{$n->sexo}}</td>
				<td>{{$n->correo}}</td>
				<td>{{$n->tipopersona->descripcion}}</td>
		

			</tr>
		@endforeach
		
	</tbody>	

</table>

@endif
