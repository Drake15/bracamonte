@extends('principal')
@section('contenido')
<main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">SISTEMA DE LABORATORIO CLINICO</a></li>
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">

                       <h2>Listado de Aranceles</h2><br/>
                        <div class="row">
                            <div class="col-md-2">
                                <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                                    <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Aranceles
                                </button>
                            </div>
                            <div class="col-md-10">
                                @if(isset($notify)!=null)
                                    @if($notify["type"]=="success")
                                        <div class="alert alert-success">
                                            {{$notify["menssage"]}}
                                        </div>
                                    @endif
                                    @if($notify["type"]=="error")
                                        <div class="alert alert-danger">
                                            {{$notify["menssage"]}}
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                            {!!Form::open(array('url'=>'subclasificacion','method'=>'GET','autocomplete'=>'off','clasificacion'=>'search'))!!} 
                                <div class="input-group">
                                   
                                    <input type="text" name="buscarTexto" class="form-control" placeholder="Buscar texto" value="{{$buscarTexto}}">
                                    <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            {{Form::close()}}
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr class="bg-primary">
                                   
                                    <th>Nombre</th>
                                    <th>Costo Referencial</th>
                                    <th>Unidad de Medida</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                    <th>Cambiar Estado</th>
                                </tr>
                            </thead>
                            <tbody>

                               @foreach($subclasificaciones as $subclasificacion)
                               
                                <tr>
                                    
                                    <td>{{$subclasificacion->nombre}}</td>
                                    <td>{{$subclasificacion->costo_referencial}}</td>
                                    <td>{{$subclasificacion->unidad_medida}}</td>
                                    <td>{{$subclasificacion->clasificacion}}</td>
                                    
                                    <td>
                                      
                                        @if($subclasificacion->condicion=="1")
                                          <button type="button" class="btn btn-success btn-md">
                                      
                                            <i class="fa fa-check fa-2x"></i> Activo
                                          </button>
  
                                        @else
  
                                          <button type="button" class="btn btn-danger btn-md">
                                      
                                            <i class="fa fa-check fa-2x"></i> Desactivado
                                          </button>
  
                                         @endif
                                         
                                      </td>
                            
                                    <td>
                                        <button type="button" class="btn btn-info btn-md" 
                                        data-id_subclasificaciones="{{$subclasificacion->id}}"
                                        data-nombre="{{$subclasificacion->nombre}}" 
                                        data-costo_referencial="{{$subclasificacion->costo_referencial}}" 
                                        data-unidad_medida="{{$subclasificacion->unidad_medida}}"  
                                        data-id_clasificacion="{{$user->idclasificacion}}"   
                                        data-toggle="modal" data-target="#abrirmodalEditar">
                                          <i class="fa fa-edit fa-2x"></i> Editar
                                        </button> &nbsp;
                                    </td>

                                    
                                    <td>

                                       @if($subclasificacion->condicion)

                                        <button type="button" class="btn btn-danger btn-sm" data-id_subclasificaciones="{{$subclasificacion->id}}" data-toggle="modal" data-target="#cambiarEstado">
                                            <i class="fa fa-times fa-2x"></i> Desactivar
                                        </button>

                                        @else

                                         <button type="button" class="btn btn-success btn-sm" data-id_subclasificaciones="{{$subclasificacion->id}}" data-toggle="modal" data-target="#cambiarEstado">
                                            <i class="fa fa-lock fa-2x"></i> Activar
                                        </button>

                                        @endif
                                       
                                    </td>

                                    
                                </tr>

                                @endforeach
                               
                            </tbody>
                        </table>
                            
                            {{$subclasificaciones->render()}}

                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar-->
            <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Agregar Aranceles</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       
                        <div class="modal-body">
                             

                            <form action="{{route('subclasificacion.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
                               
                                {{csrf_field()}}
                                
                                @include('subclasificacion.form')

                            </form>
                        </div>
                        
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->


             <!--Inicio del modal actualizar-->
             <div class="modal fade" id="abrirmodalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Actualizar Arancel</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       
                        <div class="modal-body">
                             

                            <form action="{{route('subclasificacion.update','test')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                
                                {{method_field('patch')}}
                                {{csrf_field()}}

                                <input type="hidden" id="id_subclasificacion" name="id_subclasificacion" value="">
                                
                                @include('subclasificacion.form')

                            </form>
                        </div>
                        
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->

            
             <!-- Inicio del modal Cambiar Estado del arancel -->
             <div class="modal fade" id="cambiarEstado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Cambiar Estado del Arancel</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>

                    <div class="modal-body">
                        <form action="{{route('subclasificacion.destroy','test')}}" method="POST">
                         {{method_field('delete')}}
                         {{csrf_field()}} 

                            <input type="hidden" id="id_subclasificacion" name="id_subclasificacion" value="">

                                <p>Estas seguro de cambiar el estado?</p>
        

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i>Cerrar</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-lock fa-2x"></i>Aceptar</button>
                            </div>

                         </form>
                    </div>
                    <!-- /.modal-content -->
                   </div>
                <!-- /.modal-dialog -->
             </div>
            <!-- Fin del modal Eliminar -->
           

           
            
        </main>

@endsection