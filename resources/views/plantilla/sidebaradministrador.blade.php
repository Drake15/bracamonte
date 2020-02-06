<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}" onclick="event.preventDefault(); document.getElementById('home-form').submit();"><i class="fa fa-list"></i> Dashbord</a>
                    
                    <form id="home-form" action="{{url('home')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                    </form>
            </li>
            <li class="nav-title">
                Menú
            </li>

           <!--
            <li class="nav-item">

                   <a class="nav-link" href="{{url('categoria')}}" onclick="event.preventDefault(); document.getElementById('categoria-form').submit();"><i class="fa fa-list"></i> Categorías</a>
                    
                    <form id="categoria-form" action="{{url('categoria')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                    </form>
            </li>
              
    
            <li class="nav-item">
                <a class="nav-link" href="{{url('compra')}}" onclick="event.preventDefault(); document.getElementById('compra-form').submit();"><i class="fa fa-shopping-cart"></i> Compras</a>
                <form id="compra-form" action="{{url('compra')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('proveedor')}}" onclick="event.preventDefault(); document.getElementById('proveedor-form').submit();"><i class="fa fa-list"></i> Proveedores</a>
                <form id="proveedor-form" action="{{url('proveedor')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form>
            </li>
            -->
           
            <li class="nav-item">
                <a class="nav-link" href="{{url('subclasificacion')}}" onclick="event.preventDefault(); document.getElementById('subclasificacion-form').submit();"><i class="fa fa-suitcase"></i> Subclasificacion</a>
                <form id="subclasificacion-form" action="{{url('subclasificacion')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="{{url('clasificacion')}}" onclick="event.preventDefault(); document.getElementById('clasificacion-form').submit();"><i class="fa fa-list"></i>Clasificación</a>
                <form id="clasificacion-form" action="{{url('clasificacion')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form> 
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('medico')}}" onclick="event.preventDefault(); document.getElementById('medico-form').submit();"><i class="fa fa-users"></i> Medicos</a>
                    
                    <form id="medico-form" action="{{url('medico')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                    </form>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('paciente')}}" onclick="event.preventDefault(); document.getElementById('paciente-form').submit();"><i class="fa fa-users"></i> Paciente</a>
                <form id="paciente-form" action="{{url('paciente')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form>
            </li>
                
            
            <li class="nav-item">
                <a class="nav-link" href="{{url('user')}}" onclick="event.preventDefault(); document.getElementById('user-form').submit();"><i class="fa fa-user"></i> Usuarios</a>
                <form id="user-form" action="{{url('user')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form> 
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('rol')}}" onclick="event.preventDefault(); document.getElementById('rol-form').submit();"><i class="fa fa-list"></i> Roles</a>
                <form id="rol-form" action="{{url('rol')}}" method="GET" style="display: none;">
                    {{csrf_field()}} 
                 </form> 
            </li>
                          
            
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
