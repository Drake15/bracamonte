     
   
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
        <input type="text" id="apellido_m" name="apellido_m" class="form-control" placeholder="Ingrese el Apellido Materno" pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
        
    </div>
</div>

<div class="form-group row">
        <label class="col-md-3 form-control-label" for="especialidad">Especialidad</label>
        <div class="col-md-9">
            <input type="text" id="especialidad" name="especialidad" class="form-control" placeholder="Ingrese la Especialidad" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
        </div>
</div>



<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
<button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>

</div>