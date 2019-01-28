function crear_periodo(){

}

function listar_periodo(){
    $('#tabla_periodo').html('');
    $.get("periodos",
    function (data) {
        $.each(data, function (index, val) { 
             var periodo = '<tr id="periodo'+val.id+'">\
             <td>'+val.id_telefono+'</td>\
             <td>'+val.fecha_inicio+'</td>\
             <td>'+val.fecha_fin+'</td>\
             <td>'+val.estado+'</td>\
             <td><button class="btn btn-info update_tlf" id="periodo'+val.id+'" value="'+val.id+'">Modificar</button></td>\
             <td><button class="btn btn-danger delete_tlf" id="periodo'+val.id+'" value="'+val.id+'">Borrar</button></td></tr>'
             $('#tabla_periodo').append(periodo);
        });
    },
);

}

function actualizar_periodo(){

}

function eliminar_periodo(){

}