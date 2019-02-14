
$(document).ready(function () {
    GargarTodo()
    $('#archivo_subido').change(function () {
        console.log(this.files[0].mozFullPath)
    });

    $(document).on("submit","#formulario_subida_evidencias",function (e) {
        e.preventDefault()
        var formData=new FormData(this);
        var id=$(this).val()
        $.ajax({
            type: "PUT",
            url: "subirEvidencia"+id,
            data: formData,
            success: function (response) {
                alert("Evidencia guardada")
            }
        });
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
function MostrarModalEvidencias(id,porcentaje) {
    $('#formulario_subida_evidencias').trigger('reset');
    $('#modal_subida_evidencia').modal('show');
    $('#modal_subida_evidencia').val(id)
    $('#id_porcentaje_esperado').val(porcentaje)

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
                    $.each(metasEval, function (index1,MetasE) {
                         
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
                            <td><button class="btn btn-info upload_evd" id="metaeva'+MetasE.idmeta_evaluacion+'" onClick="MostrarModalEvidencias('+MetasE.idmeta_evaluacion+','+MetasE.porcentaje+')">Evidencia</button></td></tr>'
    
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

