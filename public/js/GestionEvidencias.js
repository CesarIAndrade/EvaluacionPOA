
$(document).ready(function () {
    GargarTodo()
});

//obtener relacion entre metas evaluacion

 //obtebner metas para la tabla
 function CargarMetas(id) {
     var valor
    $.ajax({
		url: 'Meta/'+id,
		type: 'GET',
		dataType: 'json',
	})
	.done(function(datos) {
       valor=datos
    })
    .fail(function() {
        console.log("error");
        valor=null
    })
    return valor
 }

 //cargar datos en la tabla
function GargarTodo() {
    $('#tabla_lista_metas_evidencias').html('');
    var c = 1;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.get("poaActivos",
        function (data) {
            var c=1
            $.each(data, function (index, poaA) {
                $.ajax({
                    url: 'MetaEvaluacion/'+poaA.id,
                    type: 'GET',
                    dataType: 'json',
                })
                .done(function(metasEval) {
                    debugger
                    $.each(metasEval, function (index1,MetasE) {
                         
                        $.ajax({
                            url: 'Meta/'+MetasE.id_meta,
                            type: 'GET',
                            dataType: 'json',
                        })
                        .done(function(valorMeta) {
                            var periodo = '<tr id="metaeval' + MetasE.idmeta_evaluacion + '">\
                            <td>'+ c + '</td>\
                            <td>vacio1</td>\
                            <td>vacio2</td>\
                            <td>Activa</td>\
                            <td>'+ valorMeta.descripcion + '</td>\
                            <td>'+ poaA.fecha_inicio_evaluacion + '</td>\
                            <td>'+ poaA.fecha_fin_evaluacion + '</td>\
                            <td><button class="btn btn-info upload_evd" id="metaeva'+MetasE.idmeta_evaluacion+'" value="'+MetasE.idmeta_evaluacion+'">Evidencia</button></td></tr>'
    
                            $('#tabla_lista_metas_evidencias').append(periodo);
                            c++
                        })
                        .fail(function() {
                            console.log("error");
                            valor=null
                        })
                    });
                })
                .fail(function() {
                    console.log("error");
                })
                
                
            });
        },
    );
}

// id_periodo = val.id;
//                 var periodo = '<tr id="periodo' + val.id + '">\
//                 <td>'+ c++ + '</td>\
//                 <td>'+ val.descripcion + '</td>\
//                 <td>'+ val.fecha_inicio + '</td>\
//                 <td>'+ val.fecha_fin + '</td>\
//                 <td>'+ val.estado + '</td>\
//                 <td><button class="btn btn-success abrir_modal" id="periodo'+ val.id + '" value="' + val.id + '">Abrir Periodo</button></td>\
//                 <td><button class="btn btn-danger" id="periodo'+ val.id + '" value="' + val.id + '">Eliminar Periodo</button></td></tr>'
//                 $('#tabla_periodos').append(periodo);