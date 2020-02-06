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

                       <h2>Listado de Pacientes</h2><br/>
                      
                        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                            <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Paciente
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                            {!!Form::open(array('url'=>'paciente','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!} 
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
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Fechade Nacimiento</th>
                                    <th>Sexo</th>
                                    <th>N° Historial</th>
                                    <th>N° de Asegurado</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>

                               @foreach($paciente as $pacientes)
                               
                                <tr>
                                    
                                    <td>{{$pacientes->nombre}}</td>
                                    <td>{{$pacientes->apellido_p}}</td>
                                    <td>{{$pacientes->apellido_m}}</td>
                                    <td>{{$pacientes->fecha_nacimiento}}</td>
                                    <td>{{$pacientes->sexo}}</td>
                                    <td>{{$pacientes->n_historial}}</td>
                                    <td>{{$pacientes->n_asegurado}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-md" data-id_paciente="{{$pacientes->id}}" 
                                            data-nombre="{{$pacientes->nombre}}" 
                                            data-apellido_p="{{$pacientes->apellido_p}}" 
                                            data-apellido_m="{{$pacientes->apellido_m}}" 
                                            data-fecha_nacimiento="{{$pacientes->fecha_nacimiento}}" 
                                            data-sexo="{{$pacientes->sexo}}" 
                                            data-n_historial="{{$pacientes->n_historial}}" 
                                            data-n_asegurado="{{$pacientes->n_asegurado==null?' ':$pacientes->n_asegurado->n_asegurado}}"
                                            data-toggle="modal" data-target="#abrirmodalEditar">
                                          <i class="fa fa-edit fa-2x"></i> Editar
                                        </button> &nbsp;
                                    </td>

                                    
                                </tr>

                                @endforeach
                               
                            </tbody>
                        </table>
                            
                            {{$paciente->render()}}

                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <label for="">Paciente:</label>
                            <select name="paciente_id" id="paciente_id" class="form-control">
                                @foreach($paciente as $p)
                                <option value="{{$p->id}}">{{$p->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--Inicio del modal agregar-->
            <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Agregar Pacientes</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       

                        <div class="modal-body">
                             

                            <form action="{{route('paciente.store')}}" method="post" class="form-horizontal">
                               
                                {{csrf_field()}}
                                
                                @include('paciente.form')

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
                            <h4 class="modal-title">Actualizar Paciente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       
                        <div class="modal-body">
                             

                            <form action="{{route('paciente.update','test')}}" method="post" class="form-horizontal">
                                
                                {{method_field('patch')}}
                                {{csrf_field()}}

                                <input type="hidden" id="id_paciente" name="id_paciente" value="">
                                
                                
                                @include('paciente.form')

                            </form>
                        </div>
                        
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->

           
            
        </main>

@endsection