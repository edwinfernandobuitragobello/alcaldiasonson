@include('header')
@include('admin-menu')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Usuarios
                                <a href="" class="btn btn-success btn-crear btn-xs btn-effect-ripple" data-toggle="modal" data-target="#crearUsuario">
                                    CREAR USUARIO&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h1>
                            <div class="row">
                                <div class="col-md-3">
                                    <form action="{{ url('/usuarios') }}" method="GET" role="form">
                                        <div class="input-group">
                                            <input type="text" class="form-control soloNumero" id="search" name="p" size="10px" placeholder="Buscar por cédula"> 
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default" type="button"><span class="fa fa-search-plus"></span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div><br>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Cédula</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Catastro</th>
                                            <th>Dirección</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($usuarios as $usuario)
                                            <tr>
                                                <td>{{$usuario->cedula_usuario}}</td>
                                                <td>{{$usuario->nombre_uno_usuario}} {{$usuario->nombre_dos_usuario}}</td>
                                                <td>{{$usuario->apellido_uno_usuario}} {{$usuario->apellido_dos_usuario}}</td>
                                                <td>{{$usuario->catastro_usuario}}</td>
                                                <td>{{$usuario->direccion_usuario}}</td>
                                                <td>{{$usuario->telefono_usuario}}</td>
                                                <td>{{$usuario->correo_usuario}}</td>
                                                <td class="text-center">
                                                    <a onclick="usuarios_editar('{{$usuario->id}}','{{$usuario->cedula_usuario}}','{{$usuario->nombre_uno_usuario}}','{{$usuario->nombre_dos_usuario}}','{{$usuario->apellido_uno_usuario}}','{{$usuario->apellido_dos_usuario}}','{{$usuario->catastro_usuario}}','{{$usuario->direccion_usuario}}','{{$usuario->telefono_usuario}}','{{$usuario->correo_usuario}}','{{$usuario->contrasena}}')" href="#" data-toggle="modal" data-target="#editarUsuario" title="Editar Usuario" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                                                </td>
                                                <td class="text-center">
                                                    <a onclick="usuarios_eliminar('{{$usuario->id}}')" href="#" data-toggle="modal" data-target="#eliminarUsuario" title="Eliminar Usuario" class="btn btn-effect-ripple btn-sm btn-danger">Eliminar&nbsp;&nbsp;<i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal crear usuario-->
        <div class="modal fade" id="crearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-user"></i>&nbsp;Crear Usuario</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/usuarios_crear') }}" method="POST" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="recipient-name" class="control-label">Primer Nombre</label>
                                    <input type="text" class="form-control" id="nombre_uno_usuario" name="nombre_uno_usuario" placeholder="Primer nombre" required><br>

                                    <label for="recipient-name" class="control-label">Primer Apellido</label>
                                    <input type="text" class="form-control" id="apellido_uno_usuario" name="apellido_uno_usuario" placeholder="Primer apellido" required><br>

                                    <label for="message-text" class="control-label">Cédula</label>
                                    <input type="text" class="form-control soloNumero" id="cedula_usuario" name="cedula_usuario" placeholder="Número de cédula" required><br>

                                    <label for="message-text" class="control-label">Dirección</label>
                                    <input type="text" class="form-control" id="direccion_usuario" name="direccion_usuario" placeholder="Dirección de residencia"><br>

                                    <label for="message-text" class="control-label">Correo</label>
                                    <input type="email" class="form-control" id="correo_usuario" name="correo_usuario" placeholder="Correo electrónico">
                                </div>

                                <div class="col-md-6">
                                    <label for="message-text" class="control-label">Segundo Nombre</label>
                                    <input type="text" class="form-control" id="nombre_dos_usuario" name="nombre_dos_usuario" placeholder="Segundo nombre"><br>

                                    <label for="message-text" class="control-label">Segundo Apellido</label>
                                    <input type="text" class="form-control" id="apellido_dos_usuario" name="apellido_dos_usuario" placeholder="Segundo apellido"><br>

                                    <label for="message-text" class="control-label">Catastro</label>
                                    <input type="text" class="form-control soloNumero" id="catastro_usuario" name="catastro_usuario" placeholder="Número de catastro" required><br>

                                    <label for="message-text" class="control-label">Teléfono</label>
                                    <input type="text" class="form-control soloNumero" id="telefono_usuario" name="telefono_usuario" placeholder="Número de teléfono"><br>

                                    <label for="message-text" class="control-label">Contraseña</label>
                                    <input type="text" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <center>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" id="crearUsu" class="btn btn-primary">Crear</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal editar usuario-->
        <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Usuario</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/usuarios_editar') }}" method="POST" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" id="id3" value="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="recipient-name" class="control-label">Primer Nombre</label>
                                    <input type="text" class="form-control" id="nombre_uno_usuario1" name="nombre_uno_usuario" placeholder="Primer nombre" required><br>

                                    <label for="recipient-name" class="control-label">Primer Apellido</label>
                                    <input type="text" class="form-control" id="apellido_uno_usuario1" name="apellido_uno_usuario" placeholder="Primer apellido" required><br>

                                    <label for="message-text" class="control-label">Cédula</label>
                                    <input type="text" class="form-control soloNumero" id="cedula_usuario1" name="cedula_usuario" placeholder="Número de cédula" required><br>

                                    <label for="message-text" class="control-label">Dirección</label>
                                    <input type="text" class="form-control" id="direccion_usuario1" name="direccion_usuario" placeholder="Dirección de residencia"><br>

                                    <label for="message-text" class="control-label">Correo</label>
                                    <input type="email" class="form-control" id="correo_usuario1" name="correo_usuario" placeholder="Correo electrónico">
                                </div>

                                <div class="col-md-6">
                                    <label for="message-text" class="control-label">Segundo Nombre</label>
                                    <input type="text" class="form-control" id="nombre_dos_usuario1" name="nombre_dos_usuario" placeholder="Segundo nombre"><br>

                                    <label for="message-text" class="control-label">Segundo Apellido</label>
                                    <input type="text" class="form-control" id="apellido_dos_usuario1" name="apellido_dos_usuario" placeholder="Segundo apellido"><br>

                                    <label for="message-text" class="control-label">Catastro</label>
                                    <input type="text" class="form-control soloNumero" id="catastro_usuario1" name="catastro_usuario" placeholder="Número de catastro" required><br>

                                    <label for="message-text" class="control-label">Teléfono</label>
                                    <input type="text" class="form-control soloNumero" id="telefono_usuario1" name="telefono_usuario" placeholder="Número de teléfono"><br>

                                    <label for="message-text" class="control-label">Contraseña</label>
                                    <input type="text" class="form-control" id="contrasena1" name="contrasena" placeholder="Contraseña" required>
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

        <!--Modal eliminar usuarios-->
        <div class="modal fade bs-example-modal-sm" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="{{ url('/usuarios_eliminar') }}" method="GET" role="form">
                        <input type="hidden" name="id" id="id2" value="">                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Eliminar usuario</h4>
                        </div>
                        <div class="modal-body">
                            <div align="center" >
                                <div class="row">
                                    <div>¿Se encuentra totalmente seguro de eliminar el usuario?</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <center>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                                <button type="submit" type="button" class="btn btn-primary">Sí</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<script type="text/javascript">
    function usuarios_editar(id,cedula_usuario,nombre_uno_usuario,nombre_dos_usuario,apellido_uno_usuario,apellido_dos_usuario,catastro_usuario,direccion_usuario,telefono_usuario,correo_usuario,contrasena){
        $("#id3").val(id);
        $("#cedula_usuario1").val(cedula_usuario);
        $("#nombre_uno_usuario1").val(nombre_uno_usuario);
        $("#nombre_dos_usuario1").val(nombre_dos_usuario);
        $("#apellido_uno_usuario1").val(apellido_uno_usuario);
        $("#apellido_dos_usuario1").val(apellido_dos_usuario);
        $("#catastro_usuario1").val(catastro_usuario);
        $("#direccion_usuario1").val(direccion_usuario);
        $("#telefono_usuario1").val(telefono_usuario);
        $("#correo_usuario1").val(correo_usuario);
        $("#contrasena1").val(contrasena);
    }
    function usuarios_eliminar(id){
        $("#id2").val(id);
    }
</script>
@include('footer')