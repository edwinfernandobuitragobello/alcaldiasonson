@include('header')
@include('admin-menu')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Documentos
                                <a href="" class="btn btn-success btn-crear btn-xs btn-effect-ripple" data-toggle="modal" data-target="#crearArchivo">
                                    CREAR PDF&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </h1>
                            <div class="row">
                                <div class="col-md-3">
                                	<form action="{{ url('/documento') }}" method="GET" role="form">
	                                    <div class="input-group">
	                                        <input type="text" class="form-control soloNumero" id="search" name="p" size="10px" placeholder="Buscar por nombre"> 
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
                                            <th>Título</th>
                                            <th>Usuario</th>
                                            <th>Archivo</th>
                                            <th>Fecha Publicación</th>
                                            <th>Fecha Finalización</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($asignaciones as $asignacion)
                                            <tr>
                                                <td>{{$asignacion->titulo_asignacion}}</td>
                                                <td>
                                                    <b>Cédula:</b> {{$asignacion->cedula_usuario_asignacion}}<br>
                                                    <b>Nombre:</b> {{$asignacion->titulo_asignacion}}
                                                </td>
                                                <td>{{$asignacion->pdf_asignacion}}</td>
                                                <td>{{$asignacion->fecha_inicio_asignacion}}</td>
                                                <td>{{$asignacion->fecha_fin_asignacion}}</td>
                                                <td class="text-center">
                                                    <a onclick="asignaciones_editar('{{$asignacion->id}}','{{$asignacion->titulo_asignacion}}','{{$asignacion->cedula_usuario_asignacion}}','{{$asignacion->fecha_inicio_asignacion}}','{{$asignacion->fecha_fin_asignacion}}')" href="#" data-toggle="modal" data-target="#editarArchivo" title="Editar Archivo" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                                                </td>
                                                <td class="text-center">
                                                     <a download="{{$asignacion->pdf_asignacion}}" href="{{ url('uploads') }}/{{$asignacion->pdf_asignacion}}" title="Descargar Archivo" class="btn btn-effect-ripple btn-sm btn-success">Descargar&nbsp;&nbsp;<i class="fa fa-download"></i></a>
                                                </td>
                                                <td class="text-center">
                                                    <a onclick="asignaciones_eliminar('{{$asignacion->id}}')" href="#" data-toggle="modal" data-target="#eliminarArchivo" title="Eliminar Archivo" class="btn btn-effect-ripple btn-sm btn-danger">Eliminar&nbsp;&nbsp;<i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: center">{{$asignaciones->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal crear archivo-->
        <div class="modal fade" id="crearArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-file"></i>&nbsp;Crear PDF</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/asignaciones_crear') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="titulo_asignacion" name="titulo_asignacion" placeholder="Título del archivo" required><br>

                                    <label for="recipient-name" class="control-label">Cédula</label>
                                    <input type="text" class="form-control soloNumero" id="cedula_usuario_asignacion" name="cedula_usuario_asignacion" placeholder="Número de cédula" required><br>

                                    <label for="message-text" class="control-label">Archivo</label>
                                    <input type="file" id="pdf_asignacion" name="pdf_asignacion" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar archivo" required><br>

                                    <label for="message-text" class="control-label">Fecha Publicación</label>
                                    <div class="input-group bootstrap-datepicker">
                                        <span class="input-group-btn">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-calendar-check-o" ></i></a>
                                        </span>
                                        <input type="text" id="fecha_inicio_asignacion" name="fecha_inicio_asignacion" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" 
                                        placeholder="Fecha Publicación" required>                                             
                                    </div> <br>

                                    <label for="message-text" class="control-label">Fecha Finalización</label>
                                    <div class="input-group bootstrap-datepicker">
                                        <span class="input-group-btn">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-calendar-check-o" ></i></a>
                                        </span>
                                        <input type="text" id="fecha_fin_asignacion" name="fecha_fin_asignacion" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="Fecha Finalización" required>                                             
                                    </div>
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

        <!--Modal editar archivo-->
        <div class="modal fade" id="editarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar PDF</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/asignaciones_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="id3" name="id">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="titulo_asignacion1" name="titulo_asignacion" placeholder="Título del archivo" required><br>

                                    <label for="recipient-name" class="control-label">Cédula</label>
                                    <input type="text" class="form-control soloNumero" id="cedula_usuario_asignacion1" name="cedula_usuario_asignacion" placeholder="Número de cédula" disabled><br>

                                    <label for="message-text" class="control-label">Archivo</label>
                                    <input type="file" id="userfile_editar" name="userfile_editar" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar archivo" disabled><br>

                                    <label for="message-text" class="control-label">Fecha Publicación</label>
                                    <div class="input-group bootstrap-datepicker">
                                        <span class="input-group-btn">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-calendar-check-o" ></i></a>
                                        </span>
                                        <input type="text" id="fecha_inicio_asignacion1" name="fecha_inicio_asignacion" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" 
                                        placeholder="Fecha Publicación" required>                                             
                                    </div> <br>

                                    <label for="message-text" class="control-label">Fecha Finalización</label>
                                    <div class="input-group bootstrap-datepicker">
                                        <span class="input-group-btn">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary"><i class="fa fa-calendar-check-o" ></i></a>
                                        </span>
                                        <input type="text" id="fecha_fin_asignacion1" name="fecha_fin_asignacion" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="Fecha Finalización" required>                                             
                                    </div>
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <center>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" id="crearUsu" class="btn btn-primary">Guardar</button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal eliminar archivo-->
        <div class="modal fade bs-example-modal-sm" id="eliminarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form action="{{ url('/asignaciones_eliminar') }}" method="GET" role="form">
                        <input type="hidden" name="id" id="id2" value=""> 
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Eliminar archivo</h4>
                        </div>
                        <div class="modal-body">
                            <div align="center" >
                                <div class="row">
                                    <div>¿Se encuentra totalmente seguro de eliminar el archivo?</div>
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
    function asignaciones_editar(id,titulo_asignacion,cedula_usuario_asignacion,fecha_inicio_asignacion,fecha_fin_asignacion){
        $("#id3").val(id);
        $("#titulo_asignacion1").val(titulo_asignacion);
        $("#cedula_usuario_asignacion1").val(cedula_usuario_asignacion);
        $("#fecha_inicio_asignacion1").val(fecha_inicio_asignacion);
        $("#fecha_fin_asignacion1").val(fecha_fin_asignacion);
    }
    function asignaciones_eliminar(id){
        $("#id2").val(id);
    }
</script>
@include('footer')