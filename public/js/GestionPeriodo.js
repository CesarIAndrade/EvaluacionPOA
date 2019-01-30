$(document).ready(function () {
    listar_periodos();
});

function crear_periodo(){

}

function listar_periodos(){
    $('#tabla_periodos').html('');
    var c = 1;
    $.get("periodos",
    function (data) {
        $.each(data, function (index, val) { 
             var periodo = '<tr id="periodo'+val.id+'">\
             <td>'+c+++'</td>\
             <td>'+val.descripcion+'</td>\
             <td>'+val.fecha_inicio+'</td>\
             <td>'+val.fecha_fin+'</td>\
             <td>'+val.estado+'</td>\
             <td><button class="btn btn-success " id="periodo'+val.id+'" value="'+val.id+'">Modificar</button></td>\
             <td><button class="btn btn-danger " id="periodo'+val.id+'" value="'+val.id+'">Borrar</button></td></tr>'
             $('#tabla_periodos').append(periodo);
        });
    },
);

}

function actualizar_periodo(){

}

function eliminar_periodo(){

}