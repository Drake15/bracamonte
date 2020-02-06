     
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="rol">Unidad de Medida</label>
    
    <div class="col-md-9">
    
        <select class="form-control" name="id_clasificacion" id="id_clasificacion">
                                        
        <option value="0" disabled>Seleccione</option>
        
        @foreach($clasificacion as $clasificaciones)
          
           <option value="{{$clasificaciones->id}}">{{$clasificaciones->nombre}}</option>
                
        @endforeach

        </select>
    
    </div>
                               
</div>  
  
<div class="form-group row">
        <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
        <div class="col-md-9">
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el Nombre" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
            
        </div>
</div>

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="costo_referencial">Costo Referencial</label>
    <div class="col-md-9">
        <input type="text" id="costo_referencial" name="costo_referencial" class="form-control" placeholder="Ingrese el Costo Referencial" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$">
        
    </div>
</div>


<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
<button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>

</div>