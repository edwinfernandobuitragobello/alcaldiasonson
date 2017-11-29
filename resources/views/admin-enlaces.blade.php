@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Enlaces
                            </h1>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Imagen</th>
                                            <th width="20%">Título</th>
                                            <th width="70%">Link</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($enlaces as $enlace)
                                            <tr>
                                                <td class="text-center"><img src="{{ asset('imgIndex')}}/{{$enlace->imagen_enlaces}}" width="100%" height="auto"></td>
                                                <td>{{$enlace->titulo_enlaces}}</td>
                                                <td>{{$enlace->link_enlaces}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$enlace->id!!}" data-titulo_enlaces="{!!$enlace->titulo_enlaces!!}" data-link_enlaces="{!!$enlace->link_enlaces!!}" data-toggle="modal" data-target="#editarEnlace" title="Editar Enlaces" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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

        <!--Modal editar enlace-->
        <div class="modal fade" id="editarEnlace" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Enlace</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form  action="{{ url('/enalces_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="id" name="id" >
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="titulo_enlaces" name="titulo_enlaces" placeholder="Título del enlace" required><br>

                                    <label for="recipient-name" class="control-label">Imagen</label>
                                    <input type="file" id="imagen_enlaces" name="imagen_enlaces" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen"><br>

                                    <label for="recipient-name" class="control-label">Link</label>
                                    <input type="url" class="form-control" id="link_enlaces" name="link_enlaces" placeholder="Link del enlace" required>
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
        $("#titulo_enlaces").val($(this).data("titulo_enlaces"));
        $("#link_enlaces").val($(this).data("link_enlaces"));
    });
</script>