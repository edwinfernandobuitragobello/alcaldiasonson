@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Banners
                            </h1>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Imagen</th>
                                            <th width="20%">Título</th>
                                            <th width="70%">Descripción</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($banners as $banner)
                                            <tr>
                                                <td class="text-center"><img src="imgIndex/{{$banner->imagen_banner}}" width="100%" height="auto"></td>
                                                <td>{{$banner->titulo_banner}}</td>
                                                <td>{{$banner->descripcion_banner}}</td>
                                                <td class="text-center">
                                                    <a onclick="editar_banner('{{$banner->id}}','{{$banner->titulo_banner}}','{!!$banner->descripcion_banner!!}')" href="#" data-toggle="modal" data-target="#editarBanner" title="Editar Banners" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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

        <!--Modal editar banner-->
        <div class="modal fade" id="editarBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Banner</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/banner_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="id" name="id" >
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="titulo_banner" name="titulo_banner" placeholder="Título del banner" required><br>

                                    <label for="recipient-name" class="control-label">Imagen</label>
                                    <input type="file" id="imagen_banner" name="imagen_banner" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen"><br>

                                    <label for="message-text" class="control-label">Descripción</label>
                                    <textarea class="form-control textArea" rows="3" id="descripcion_banner" name="descripcion_banner" placeholder="Descripción del banner"></textarea>
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
<script type="text/javascript">
    function editar_banner(id,titulo_banner,descripcion_banner){
        $("#id").val(id);
        $("#titulo_banner").val(titulo_banner);
        $("#descripcion_banner").val(descripcion_banner);
    }
</script>
@include('footer-index')