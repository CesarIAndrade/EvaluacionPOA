<div class="row">
    <div class="col-md-12">
        <div class="form-group has-feedback border">
            <label for="archivo">{{ __('Subir Archivo PDF') }}</label>
            <input name="archivo" id="id_archivo_subido" value="" class="form-control-file" type="file" required >
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
    <div id="id_evidencias" class="col-md-12">
        <div class="form-group has-feedback border">
            <label for="archivo_evidencia">{{ __('Subir Archivo PDF') }}</label>
            <input name="archivo_evidencia" id="id_archivo_evidencia" value="ArchivosSubidos/1550157208_InformeReportes.pdf" class="form-control-file" type="file" required >
        </div>
    </div>
</div>