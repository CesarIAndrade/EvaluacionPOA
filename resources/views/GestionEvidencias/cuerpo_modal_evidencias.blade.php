<div class="row">
    <div class="col-md-12">
        <div class="form-group has-feedback border">
            <label for="archivo_subido">{{ __('Subir Archivo PDF') }}</label>
            <input autocomplete="off" id="archivo_subido" class="form-control-file" type="file" name="archivo_subido" accept=".pdf" required >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group has-feedback">
            <label for="id_porcentaje_esperado">{{ __('Porcentaje esperado') }}</label>
            <input id="id_porcentaje_esperado"  value="" type="text" class="form-control" disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group has-feedback">
            <label for="id_porcentaje_cumplido">{{ __('Porcentaje cumplido') }}</label>
            <input autocomplete="off" name="porcentaje_cumplido" id="id_porcentaje_cumplido" value="" type="text" class="form-control" required autofocus>
        </div>
    </div>
</div>