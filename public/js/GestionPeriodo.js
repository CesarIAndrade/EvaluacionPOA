var id_periodo;
$(document).ready(function () {
    listar_periodos();
    $('body').on('click', '.abrir_modal', function(){
        id_periodo = $(this).val();
        llenar_evaluacion_periodo();
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

function llenar_evaluacion_periodo() {
    $('#tabla_evaluacion').html('');
    var c = 1;
    $.get("evaluacion_poa",
        function (data) {
            $.each(data, function (index, val) {
                clase = crear_clase_para_etapa(val.estado);
                id_etapa = val.id;
                var etapa = '<tr id="etapa'+val.id+'">\
                <td>'+c+++'</td>\
                <td>'+val.fecha_inicio+'</td>\
                <td>'+val.fecha_fin+'</td>\
                <td>'+val.etapa+'</td>\
                <td><center><button class="'+clase[0]+'" '+clase[2]+' id="etapa'+val.id+'" value="'+val.id+'">'+clase[1]+'</button></center></td></tr>'
                $('#tabla_evaluacion').append(etapa);
            });
        },
    );
}

function crear_clase_para_etapa(estado){
    if(estado == 'ND'){
        var arreglo = ['btn btn-secondary', 'No Disponible', 'disabled'] 
        return arreglo;
    }
    else if(estado == 'H'){
        var arreglo = ['btn btn-info', 'Habilitar', ''] 
        return arreglo;        
    }
    else if(estado == 'D'){
        var arreglo = ['btn btn-danger', 'Deshabilitar', ''] 
        return arreglo;        
    }
    else if(estado == 'E'){
        var arreglo = ['btn btn-succes', 'Evaluado', 'disabled'] 
        return arreglo;        
    }
}

function actualizar_periodo(){

}

function eliminar_periodo(){

}
function pruebaFecha() { 
    var f = new Date();
    alert(f.getDate() + "/" + (f.getMonth() +1) + "/" + (f.getFullYear()) + ":" + (f.getHours()) + ":" +  (f.getMinutes())+ ":" + (f.getSeconds()))
 }