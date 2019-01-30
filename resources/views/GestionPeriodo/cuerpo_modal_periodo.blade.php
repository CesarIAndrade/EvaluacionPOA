<div class="row">
    <div class="col-md-6">
        <div class="form-group has-feedback">
            <label for="">Fecha de inicio</label>
            <input autocomplete="off" id="id_md_fecha_ini_periodo" type="date" class="form-control" value="" required/>
            <span class="glyphicon glyphicon-book form-control-feedback"></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group has-feedback">
            <label for="">Fecha de fin</label>
            <input autocomplete="off" id="id_md_fecha_fin_periodo" type="date" class="form-control" value="" required/>
            <span class="glyphicon glyphicon-book form-control-feedback"></span>
        </div>
    </div>
</div>

@include('GestionPeriodo.tabla_evaluacion')