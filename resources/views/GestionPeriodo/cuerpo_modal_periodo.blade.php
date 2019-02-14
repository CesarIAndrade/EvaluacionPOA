
<?php
date_default_timezone_set('America/New_York');
$fecha = date('Y-m-d H:i:s');
?>

<div class="row">
    <div class="col-md-6">
        <div class="form-group has-feedback">
            <label for="id_md_fecha_ini_periodo">Fecha de inicio</label>
            <input autocomplete="off" id="id_md_fecha_ini_periodo" type="datetime" class="form-control" value = "<?=$fecha?>"/>
            <span class="glyphicon glyphicon-book form-control-feedback"></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group has-feedback">
            <label for="id_md_fecha_fin_periodo">Fecha de fin</label>
            <input autocomplete="off" id="id_md_fecha_fin_periodo" type="datetime-local" class="form-control" value = "" disabled/>
            <span class="glyphicon glyphicon-book form-control-feedback"></span>
        </div>
    </div>
</div>