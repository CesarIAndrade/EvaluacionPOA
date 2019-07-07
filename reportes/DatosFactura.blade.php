@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">  
                  <form  method="POST" role="form" action="" enctype="multipart/form-data" id="frmeditar"> 
                   @if(isset($factura))
                   @foreach($factura as $n)
                    <div class="modal-header  bg-light d-none">
                     <p class="text-left text-uppercase">   Fecha</p>
                    </div>  
                    <div class="modal-body">
                       

                        <div class="alert alert fade show form-group text-center border" role="alert"> 
                          
                           <div class="col-1 col-sm-12 panel content text-left">
                               <div class="row">
                                 <div class="col-sm-3"><b>N° Factura</b></div>
                                 <div class="col-sm-3">  <span id="numero_factura">{{$n->numero_factura}} </span></div>
                                 <div class="col-sm-3 text-right"><b>Fecha</b></div>
                                 <div class="col-sm-3 text-right"><span id="fecha">{{$n->fecha}} </span></div>
                               </div>
                               <div class="row ">
                                 <div class="col-sm-3"><b>Proveedor</b> </div>
                                 <div class="col-sm-9" ><span id="proveedor">{{$n->nombre_comercial}}</span></div>
                               </div>
                               <div class="row ">
                                 <div class="col-sm-3"><strong>Usuario</strong> </div>
                                 <div class="col-sm-9" ><span id="usuario">{{$n->usuario}}</span></div>
                               </div>
                           </div>              

                       <div class="text-center  pre-scrollable table-respsive">
                          <table id="tablaRepuestosAgregados"  class="table table-hover table-sm text-center border">
                           <thead class="thead ">
                            <tr class="text-center">
                               <th colspan="4">  
                                   <label >DETALLE</label>
                               </th>
                            </tr>
                            <tr class="">
                               <th scope="">  
                                   <label for="validationTooltip01">Repuesto</label>
                               </th>
                               
                               <th >
                                    <label for="validationTooltip01">Cantidad</label>
                               </th>
                               <th>
                                    <label for="validationTooltip01"> Costo</label>
                               </th>
                               <th >
                                    <label for="validationTooltip01"> Total</label>
                               </th>
                            </tr>
                           </thead>
                           <tbody id="tablaDetalle">
                             @foreach($factura as $n)
                              <tr>
                                <td>{{$n->nombre}}</td>
                                <td>{{$n->cantidad}}</td>
                                <td>{{$n->costo_unitario}}</td>
                                <td>{{$n->costo_total}}</td>
                              </tr>
                             @endforeach
                           </tbody>
                          </table>
                       </div>

                       



                    </div>
                    <div class="container card-body">
                     <div class="row">
                       <div class="col-3 col-sm-5 text-center " style="border-right:2px solid #ECF0F1;" >
                          <a href="" id="rutaC" target="_blank" hidden ><i class="fa fa-eye"></i> Ver Imagen de factura </a>
                       </div>
                       <div class="col-1 col-sm-7 text-left">
                           <div class="row">
                             <div class="col-sm-6"><strong>Subtotal</strong></div>
                             <div class="col-sm-6" id="subtC">{{$n->subtotal}}</div>
                           </div>
                           <div class="row">
                             <div class="col-sm-6">Iva     12%</div>
                             <div class="col-sm-6" id="ivaC">{{$n->iva}}</div>
                           </div>
                           <div class="row ">
                             <div class="col-sm-6"><strong>Total </strong> </div>
                             <div class="col-sm-6" ><b id="totalC">{{$n->total}}</b></div>
                           </div>
                       </div>

                     </div>  
                    </div>

      
                  </form>   
                  @endforeach
                  @endif                                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection