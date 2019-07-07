<div class="modal fade modal_gestion_periodos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id = "modal_apertura_periodo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apertura de periodos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    @include('GestionPeriodo.cuerpo_modal_periodo')
                    @include('GestionPeriodo.tabla_evaluacion')
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id = "habilitar_periodo_de_evaluacion">Habilitar periodo</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>