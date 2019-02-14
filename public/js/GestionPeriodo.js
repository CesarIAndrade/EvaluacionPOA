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
        estado = $(this).html();   
        marcar_dispositivos($(this));
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
            clase = crear_clase_para_etapa(val.estado);
            var etapa = '<tr id="etapa' + val.id + '">\
                <td>'+ c++ + '</td>\
                <td>'+ val.fecha_inicio + '</td>\
                <td>'+ val.fecha_fin + '</td>\
                <td>'+ val.etapa + '</td>\
                <td><center><button type = "button" class="'+clase[0]+' seleccionado" id="etapa' + val.id + '" value="' + val.id + '" '+clase[2]+'>'+clase[1]+'</button></center></td></tr>'
            $('#etapa' + val.id).replaceWith(etapa);
            $('#modal_apertura_periodo').trigger('reset');
        },
        error: function (val) {
            console.log('Error:', val)
        }
    });
    $('#id_md_fecha_fin_periodo').val('');
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
                <td><center><button type = "button" class="'+clase[0]+' seleccionado" id="etapa' + val.id + '" value="'+val.id+'" '+clase[2]+'>'+clase[1]+'</button></center></td></tr>'
            $('#tabla_evaluacion').append(etapa);
        });
    });
}

function crear_clase_para_etapa(estado) {
    if (estado == 'H') {
        var arreglo = ['btn btn-success', 'Habilitar', '']
        return arreglo;
    }
    else if (estado == 'D') {
        var arreglo = ['btn btn-danger', 'Deshabilitar', '','E']
        return arreglo;
    }
}

function marcar_dispositivos(objeto){
    if($(objeto).hasClass('btn btn-danger')){
        $(objeto).removeClass('btn btn-danger');
        $(objeto).addClass('btn btn-info');
        document.getElementById('id_md_fecha_fin_periodo').disabled = true;
    }
    else if($(objeto).hasClass('btn btn-success')){
        $(objeto).removeClass('btn btn-success');
        $(objeto).addClass('btn btn-info');
        document.getElementById('id_md_fecha_fin_periodo').disabled = false;
    }
    else if($(objeto).hasClass('btn btn-info') && $(objeto).html() == 'Habilitar'){
        $(objeto).removeClass('btn btn-info');
        $(objeto).addClass('btn btn-success');
        document.getElementById('id_md_fecha_fin_periodo').disabled = true;
    }
    else if($(objeto).hasClass('btn btn-info') && $(objeto).html() == 'Deshabilitar'){
        $(objeto).removeClass('btn btn-info');
        $(objeto).addClass('btn btn-danger');
    }
}