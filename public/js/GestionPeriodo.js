var id_periodo;
var etapa_seleccionada;
var estado;
$(document).ready(function () {
    listar_periodos();
    $('body').on('click', '.abrir_modal', function () {
        id_periodo = $(this).val();
        llenar_evaluacion_periodo();
        $('#modal_apertura_periodo').modal('show');
    })

    // Ubicar periodo de evaluacion seleecionado
    $('#tabla_evaluacion').on('click', '.seleccionado', function () {
        etapa_seleccionada = $(this).val();
    });

    // Modificar Campos para abrir periodo de evaluacion
    $('#habilitar_periodo_de_evaluacion').click(function (e) {
        e.preventDefault();
        crear_periodo();
    })
});

function crear_periodo() {
    var c = 1;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.get("evaluacion_poas/"+etapa_seleccionada, function (data) {
        console.log(data.estado)
        estado=crear_clase_para_etapa(data.estado)
        var formData = {
            fecha_inicio_evaluacion: $('#id_md_fecha_ini_periodo').val(),
            fecha_fin_evaluacion: $('#id_md_fecha_fin_periodo').val(),
            estado: estado,
        }
        $.ajax({
            type: "PUT",
            url: "periodo/" + etapa_seleccionada,
            data: formData,
            dataType: "json",
            success: function (val) {
                var etapa = '<tr id="etapa' + val.id + '">\
                <td>'+ c++ + '</td>\
                <td>'+ val.fecha_inicio + '</td>\
                <td>'+ val.fecha_fin + '</td>\
                <td>'+ val.etapa + '</td>\
                <td><center><button class="seleccionado" id="etapa' + val.id + '" value="' + val.id + '"></button></center></td></tr>'
                $('#etapa' + val.id).replaceWith(etapa);
                $('#modal_apertura_periodo').trigger('reset');
            },
            error: function (val) {
                console.log('Error:', val)
            }
        });
    });
    
}

function listar_periodos() {
    $('#tabla_lista_metas_evidencias').html('');
    var c = 1;
    $.get("periodos",
        function (data) {
            $.each(data, function (index, val) {
                id_periodo = val.id;
                var periodo = '<tr id="periodo' + val.id + '">\
                <td>'+ c++ + '</td>\
                <td>'+ val.descripcion + '</td>\
                <td>'+ val.fecha_inicio + '</td>\
                <td>'+ val.fecha_fin + '</td>\
                <td>'+ val.estado + '</td>\
                <td><button class="btn btn-success abrir_modal" id="periodo'+ val.id + '" value="' + val.id + '">Abrir Periodo</button></td>\
                <td><button class="btn btn-danger" id="periodo'+ val.id + '" value="' + val.id + '">Eliminar Periodo</button></td></tr>'
                $('#tabla_periodos').append(periodo);
            });
        },
    );
}

function llenar_evaluacion_periodo() {
    $('#tabla_evaluacion').html('');
    var c = 1;
    $.get("evaluacion_poa", function (data) {
        $.each(data, function (index, val) {
            clase = crear_clase_para_etapa(val.estado);
            var etapa = '<tr id="etapa' + val.id + '">\
                <td>'+ c++ + '</td>\
                <td>'+ val.fecha_inicio + '</td>\
                <td>'+ val.fecha_fin + '</td>\
                <td>'+ val.etapa + '</td>\
                <td><center><a class="'+clase[0]+' seleccionado" id="etapa' + val.id + '" value="' + val.id + '" '+clase[2]+'>'+clase[1]+'</a></center></td></tr>'
            $('#tabla_evaluacion').append(etapa);
        });
    });
}

function crear_clase_para_etapa(estado) {
    if (estado == 'H') {
        var arreglo = ['btn btn-succes', 'Habilitar', '']
        return arreglo;
    }
    else if (estado == 'D') {
        var arreglo = ['btn btn-danger', 'Deshabilitar', '','E']
        return arreglo;
    }
}

function actualizar_periodo() {

}

function eliminar_periodo() {

}
