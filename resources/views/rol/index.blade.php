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

                       <h2>Listado de Roles</h2><br/>
                      
                       
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                            {!!Form::open(array('url'=>'rol','method'=>'GET','autocomplete'=>'off','rol'=>'search'))!!} 
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
                                   
                                    <th>Rol</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                               @foreach($rol as $roles)
                               
                                <tr>
                                    
                                    <td>{{$roles->nombre}}</td>
                                    <td>{{$roles->descripcion}}</td>
                                    <td>

                                      @if($roles->condicion=="1")

                                        <button type="button" class="btn btn-success btn-md">
                                    
                                          <i class="fa fa-check fa-2x"></i> Activo
                                        </button>

                                      @else
                                         <button type="button" class="btn btn-danger btn-md">
                                    
                                         <i class="fa fa-check fa-2x"></i> Desactivado
                                         </button>

                                      @endif
                                        
                                       
                                    </td>

                                   
                                </tr>

                                @endforeach
                               
                            </tbody>
                        </table>
                            
                            {{$rol->render()}}

                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
             
            
        </main>

@endsection