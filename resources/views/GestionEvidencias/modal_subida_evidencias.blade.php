<div class="modal fade modal_gestion_periodos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id = "modal_subida_evidencia" val="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subida de avidencias</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{--  <form id="formulario_subida_evidencias" method="POST" enctype="multipart/form-data" action="{{ action('EstudiantesController@update', $id)}}">  --}}
                <form id="formulario_subida_evidencias" files="true" role="form" enctype="multipart/form-data">    
                <div class="modal-body">
                    @include('GestionEvidencias.cuerpo_modal_evidencias')
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id = "subir_evidencia">Guardar cambios</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>