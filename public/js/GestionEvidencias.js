
$(document).ready(function () {
    GargarTodo()
    $(document).on("submit","#formulario_subida_evidencias",function (e) {
        e.preventDefault()
        var formData = new FormData($(this)[0]);
        console.log(formData)
        var id=$(this).val()
        debugger
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "subirEvidencia/" + id,
            data: formData,
            cache: false,
            contentType:false,
            processData:false,
            dataType: "json",
            success: function (val) {
                alert("Evidencia almacenada correctamente")
            },
            error: function (val) {
                console.log('Error:', val)
            }
        });
        $('#modal_subida_evidencia').modal('hide');
        $('#formulario_subida_evidencias').trigger('reset');

    });
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
 function GuardarArchivo() {
     
 }
function MostrarModalEvidencias(id, porcentaje) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#formulario_subida_evidencias').trigger('reset');
    $('#modal_subida_evidencia').modal('show');
    $('#formulario_subida_evidencias').val(id)

    $('#id_porcentaje_esperado').val('3')

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
                    $.each(metasEval, function (i, MetasE) {
                         
                        $.ajax({
                            url: 'Meta/'+MetasE.id_meta,
                            type: 'GET',
                            dataType: 'json',
                        })
                        .done(function(valorMeta) {
                            var periodo = '<tr id="metaeval' + MetasE.idmeta_evaluacion + '">\
                            <td>'+ c + '</td>\
                            <td class="text-success">Activa</td>\
                            <td>'+ valorMeta.descripcion + '</td>\
                            <td>'+ poaA.fecha_inicio_evaluacion + '</td>\
                            <td>'+ poaA.fecha_fin_evaluacion + '</td>\
                            <td><button class="btn btn-info upload_evd" id="metaeva'+MetasE.idmeta_evaluacion+'" onClick="MostrarModalEvidencias('+MetasE.idmeta_evaluacion+','+MetasE.evidencia+')">Evidencia</button></td></tr>'
    
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

