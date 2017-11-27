    <body>
        <div id="page-wrapper" class="page-loading">
            <div class="preloader">
                <div class="inner">
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
           
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                <div id="sidebar">
                    <div id="sidebar-brand" class="themed-background">
                        <a href="#" class="sidebar-title">
                            <i class="fa fa-tachometer"></i><span class="sidebar-nav-mini-hide"><strong>Bienvenido Admin</strong></span>
                        </a>
                    </div>

                    <div id="sidebar-scroll">
                        <div class="sidebar-content">
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="{{url('/')}}">
                                        <i class="fa fa-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Usuarios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/documentos')}}">
                                        <i class="fa fa-file sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Documentos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#editarAdmin">
                                        <i class="fa fa-key sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Administrador</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="{{ url('/logeo_fin') }}"  style="padding-right: 20px">
                                    Cerrar Sesión&nbsp;&nbsp;<i class="fa fa-power-off"></i>
                                </a>
                            </li>
                        </ul>
                    </header>
                    <!--Modal editar admin-->
                    <div class="modal fade" id="editarAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog modal-admin" role="document">
                            <div class="modal-content">         
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Administrador</h4> 
                                </div> 
                                <div class="modal-body">                            
                                    <form action="{{ url('/usuarios_editar') }}" method="POST" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" id="id1" value="1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="recipient-name" class="control-label">Cédula</label>
                                                <input type="text" class="form-control soloNumero" id="cedula_admin" name="cedula_usuario" placeholder="Número de cédula" value="{{$admin->cedula_usuario}}" required><br>

                                                <label for="recipient-name" class="control-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre_admin" name="nombre_uno_usuario" placeholder="Nombre del administrador" value="{{$admin->nombre_uno_usuario}}"><br>

                                                <label for="recipient-name" class="control-label">Apellido</label>
                                                <input type="text" class="form-control" id="apellido_admin" name="apellido_uno_usuario" placeholder="Apellido del administrador" value="{{$admin->apellido_uno_usuario}}"><br>

                                                <label for="recipient-name" class="control-label">Catastro</label>
                                                <input type="text" class="form-control soloNumero" id="catastro_admin" name="catastro_usuario" placeholder="Número de catastro" value="{{$admin->catastro_usuario}}"><br>

                                                <label for="recipient-name" class="control-label">Contraseña</label>
                                                <input type="text" class="form-control soloNumero" id="contrasena_admin" name="contrasena" placeholder="Contraseña" value="{{$admin->contrasena}}">  
                                            </div>
                                        </div><br>
                                        <div class="modal-footer">
                                            <center>
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" id="crearUsu" class="btn btn-primary">Editar</button>
                                            </center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>