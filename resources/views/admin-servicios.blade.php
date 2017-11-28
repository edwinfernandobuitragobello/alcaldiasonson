@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Servicios
                            </h1>
                            <form action="{{ url('/servicios_editar1') }}" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea class="form-control textArea" rows="5" id="descripcion_servicios" name="descripcion_servicios" placeholder="Descripción">{{$servicios1->descripcion_servicios}}</textarea>
                                    </div>
                                    <button style="left: 50%; top: 10px;" type="submit" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></button>
                                </div><br>
                            </form>
                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Icono</th>
                                            <th width="20%">Título</th>
                                            <th width="70%">Descripción</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($servicios2 as $servicios)
                                            <tr>
                                                <td class="text-center"><img src="{{ asset('imgIndex')}}/{{$servicios->imagen_servicios}}" width="100%" height="auto"></td>
                                                <td>{{$servicios->titulo_servicios}}</td>
                                                <td>{{$servicios->texto_servicios}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$servicios->id!!}" data-titulo="{!!$servicios->titulo_servicios!!}" data-text="{!!$servicios->texto_servicios!!}" data-toggle="modal" data-target="#editarServicio" title="Editar Servicios" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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

        <!--Modal editar servicio-->
        <div class="modal fade" id="editarServicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Servicio</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/servicios_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="id" name="id" >
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="titulo_servicios" name="titulo_servicios" placeholder="Título del servicio" required><br>

                                    <label for="recipient-name" class="control-label">Icono</label>
                                    <input type="file" id="imagen_servicios" name="imagen_servicios" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono"><br>

                                    <label for="message-text" class="control-label">Descripción</label>
                                    <textarea class="form-control textArea" rows="3" id="texto_servicios" name="texto_servicios" placeholder="Descripción del servicio"></textarea>
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
        $("#titulo_servicios").val($(this).data("titulo"));
        $("#texto_servicios").val($(this).data("text"));
    });
</script>