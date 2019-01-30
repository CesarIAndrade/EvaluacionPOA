var id_periodo;
$(document).ready(function () {
    listar_periodos();
    $('body').on('click', '.abrir_modal', function(){
        id_periodo = $(this).val();
        llenar_evaluacion();
        $('#modal_apertura_periodo').modal('show');
    })
});

function crear_periodo(){

}

function listar_periodos(){
    $('#tabla_periodos').html('');
    var c = 1;
    $.get("periodos",
        function (data) {
            $.each(data, function (index, val) { 
                id_periodo = val.id;
                var periodo = '<tr id="periodo'+val.id+'">\
                <td>'+c+++'</td>\
                <td>'+val.descripcion+'</td>\
                <td>'+val.fecha_inicio+'</td>\
                <td>'+val.fecha_fin+'</td>\
                <td>'+val.estado+'</td>\
                <td><button class="btn btn-success abrir_modal" id="periodo'+val.id+'" value="'+val.id+'">Abrir Periodo</button></td>\
                <td><button class="btn btn-danger" id="periodo'+val.id+'" value="'+val.id+'">Eliminar Periodo</button></td></tr>'
                $('#tabla_periodos').append(periodo);
            });
        },
    );
}

function llenar_evaluacion() {
    $('#tabla_evaluacion').html('');
    var c = 1;
    $.get("evaluacion_poa",
        function (data) {
            $.each(data, function (index, val) { 
                id_etapa = val.id;
                var etapa = '<tr id="etapa'+val.id+'">\
                <td>'+c+++'</td>\
                <td>'+val.fecha_inicio+'</td>\
                <td>'+val.fecha_fin+'</td>\
                <td>'+val.numero+'</td>\
                <td><button class="btn btn-success " id="etapa'+val.id+'" value="'+val.id+'">Habilitar</button></td>\
                <td><button class="btn btn-danger" id="etapa'+val.id+'" value="'+val.id+'">Cerrar</button></td></tr>'
                $('#tabla_evaluacion').append(etapa);
            });
        },
    );
}

function actualizar_periodo(){

}

function eliminar_periodo(){

}