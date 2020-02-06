       
<div class="form-group row">
        <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
        <div class="col-md-9">
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el Nombre" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
            
        </div>
</div>

<div class="form-group row">
        <label class="col-md-3 form-control-label" for="apellido">Apellido</label>
        <div class="col-md-9">
            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingrese el Apellido" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
            
    </div>
</div>

<div class="form-group row">
        <label class="col-md-3 form-control-label" for="telefono">Telefono</label>
        <div class="col-md-9">
          
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese el telefono" required pattern="[0-9]{0,8}">
               
        </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="direccion">Dirección</label>
    <div class="col-md-9">
        <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese la dirección" pattern="^[a-zA-Z0-9_áéíóúñ°\s]{0,200}$">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="rol">Rol</label>
    
    <div class="col-md-9">
    
        <select class="form-control" name="id_rol" id="id_rol">
                                        
        <option value="0" disabled>Seleccione</option>
        
        @foreach($rol as $roles)
          
           <option value="{{$roles->id}}">{{$roles->nombre}}</option>
                
        @endforeach

        </select>
    
    </div>
                               
</div>

<div class="form-group row">
        <label class="col-md-3 form-control-label" for="usuario">Usuario</label>
        <div class="col-md-9">
          
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingrese el usuario" pattern="^[a-zA-Z0-9_áéíóúñ]{0,30}$">
               
        </div>
</div>

<div class="form-group row">
        <label class="col-md-3 form-control-label" for="password">Password</label>
        <div class="col-md-9">
          
            <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese el password" required>
               
        </div>
</div>


<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
<button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>

</div>