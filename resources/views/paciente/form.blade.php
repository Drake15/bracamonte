     
   
<div class="form-group row">
        <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
        <div class="col-md-9">
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el Nombre" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
            
        </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="apellido_p">Apellido Paterno</label>
    <div class="col-md-9">
        <input type="text" id="apellido_p" name="apellido_p" class="form-control" placeholder="Ingrese el Apellido Paterno" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
        
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="apellido_m">Apellido Materno</label>
    <div class="col-md-9">
        <input type="text" id="apellido_m" name="apellido_m" class="form-control" placeholder="Ingrese el Apellido Materno" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
        
    </div>
</div>

<div class="form-group row">
        <label class="col-md-3 form-control-label" for="fecha_nacimiento">Fecha de Nacimiento</label>
        <div class="col-md-9">
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" placeholder="fecha_nacimiento" >
        </div>
        
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="sexo">Sexo</label>
    <div class="col-md-9">
        <select class="form-control" id="sexo" name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        @if ($errors->has('sexo'))
                    <small class="form-text text-danger">{{ $errors->first('sexo') }}</small>
                @endif
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="n_historial">N° Histrial</label>
    <div class="col-md-9">
        <input type="text" id="n_historial" name="n_historial" class="form-control" placeholder="Ingrese el Número de Historial" required pattern="^[0-9]{0,10}$">
        
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="n_asegurado">N° Asegurado</label>
    <div class="col-md-9">
        <input type="text" id="n_asegurado" name="n_asegurado" class="form-control" placeholder="Ingrese el Número de Asegurado" required pattern="^[0-9]{0,10}$">
        
    </div>
</div>


<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
<button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>

</div>