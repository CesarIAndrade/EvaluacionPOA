<!DOCTYPE html>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <img src="imagenes/header.png" style="width: 750px;
        height:100px;
        align:center;">


<h2><center>PROVEEDORES</center></h2>

@if(isset($mostrarProveedor))


<table border="1" style="font-family: Sans-serif;  font-size: 9px; text-align:center; width:100%; float: center;">
                
               

        <thead style="background-color:#b2e1e6">

            <tr>
				<b><th>RUC</th> </b>
				<b><th>Razón Social</th> </b>
				<b><th>Nombre Comercial</th> </b>
				<b><th>Dirección</th></b>
				<b><th>Teléfono</th></b>
                $proveedor->RUC=$request->RUC;
         $proveedor->razon_social=$request->razon_social;
         $proveedor->nombre_comercial=$request->nombre_comercial;
         $proveedor->direccion=$request->direccion;
         $proveedor->telefono=$request->telefono; 

            </tr>
        </thead>
        <tbody>
    @foreach ($mostrarProveedor as $n)
            <tr>
				<td>{{$n->RUC}}</td>
				<td>{{$n->razon_social}}</td>
				<td>{{$n->nombre_comercial}}</td>
				<td>{{$n->direccion}}</td>
				<td>{{$n->telefono}}</td>


            </tr>
			@endforeach
        </tbody>
    </table>
	
@endif