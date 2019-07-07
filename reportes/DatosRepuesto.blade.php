<!DOCTYPE html>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <img src="imagenes/header.png" style="width: 750px;
        height:100px;
        align:center;">


<h2><center>REPUESTOS </center></h2>

@if(isset($mostrarRepuesto))


<table border="1" style="font-family: Sans-serif;  font-size: 9px; text-align:center; width:100%; float: center;">
                
               

        <thead style="background-color:#b2e1e6">

            <tr>
				<b><th>Repuesto</th> </b>
				<b><th>Marca</th> </b>
				<b><th>Modelo</th> </b>
				<b><th>Stock</th></b>
				<b><th>Tarifa</th></b>

            </tr>
        </thead>
        <tbody>
    @foreach ($mostrarRepuesto as $n)
            <tr>
				<td>{{$n->nombre}}</td>
				<td>{{$n->marca_repuesto->descripcion}}</td>
				<td>{{$n->modelo}}</td>
				<td>{{$n->stock}}</td>
				<td>{{$n->tarifa}}</td>


            </tr>
			@endforeach
        </tbody>
    </table>
	
@endif