@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Testimonios
                            </h1>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Imagen</th>
                                            <th width="20%">Nombre</th>
                                            <th width="20%">Cargo</th>
                                            <th width="50%">Descripción</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($testimonios as $testimonio)
                                            <tr>
                                                <td class="text-center"><img src="{{ asset('imgIndex')}}/{{$testimonio->imagen_testimonios}}" width="100%" height="auto"></td>
                                                <td>{{$testimonio->nombre_testimonios}}</td>
                                                <td>{{$testimonio->cargo_testimonios}}</td>
                                                <td>{{$testimonio->descripcion_testimonios}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$testimonio->id!!}" data-nombre_testimonios="{!!$testimonio->nombre_testimonios!!}" data-cargo_testimonios="{!!$testimonio->cargo_testimonios!!}" data-descripcion_testimonios="{!!$testimonio->descripcion_testimonios!!}" data-toggle="modal" data-target="#editarTestimonio" title="Editar Testimonios" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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

        <!--Modal editar testimonio-->
        <div class="modal fade" id="editarTestimonio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Testimonio</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/testimonios_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="id" name="id" >
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_testimonios" name="nombre_testimonios" placeholder="Nombre de la persona" required><br>

                                    <label for="recipient-name" class="control-label">Cargo</label>
                                    <input type="text" class="form-control" id="cargo_testimonios" name="cargo_testimonios" placeholder="Cargo de la persona" required><br>

                                    <label for="recipient-name" class="control-label">Imagen</label>
                                    <input type="file" id="imagen_testimonios" name="imagen_testimonios" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen" ><br>

                                    <label for="message-text" class="control-label">Descripción</label>
                                    <textarea class="form-control textArea" rows="3" id="descripcion_testimonios" name="descripcion_testimonios" placeholder="Descripción del testimonio"></textarea>
                                </div>
                            </div>  
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
@include('footer-index')
<script type="text/javascript">
    $(".btn-success").click(function(){
        $("#id").val($(this).data("id"));
        $("#nombre_testimonios").val($(this).data("nombre_testimonios"));
        $("#cargo_testimonios").val($(this).data("cargo_testimonios"));
        $("#descripcion_testimonios").val($(this).data("descripcion_testimonios"));
    });
</script>