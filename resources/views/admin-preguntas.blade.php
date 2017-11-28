@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Preguntas
                            </h1>
                            <div class="row">
                                <form action="{{ url('/preguntas_editar1') }}" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-12">
                                        <textarea class="form-control textArea" rows="3" id="descripcion_preguntas" name="descripcion_preguntas" placeholder="Descripción">{{$preguntas1->descripcion_preguntas}}</textarea>
                                    </div>
                                    <button style="left: 50%; top: 10px;" type="submit" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></button>
                                </form>
                            </div><br>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="25%">Título</th>
                                            <th width="70%">Descripción</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($preguntas2 as $preguntas)
                                            <tr>
                                                <td>{{$preguntas->titulo_preguntas}}</td>
                                                <td>{{$preguntas->respuesta_preguntas}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$preguntas->id!!}" data-titulo_preguntas="{!!$preguntas->titulo_preguntas!!}" data-respuesta_preguntas="{!!$preguntas->respuesta_preguntas!!}" data-toggle="modal" data-target="#editarPregunta" title="Editar Preguntas" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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

        <!--Modal editar pregunta-->
        <div class="modal fade" id="editarPregunta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog modal-admin" role="document">
                <div class="modal-content">         
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"> <i class="fa fa-edit"></i>&nbsp;Editar Pregunta</h4> 
                    </div> 
                    <div class="modal-body">                            
                        <form action="{{ url('/preguntas_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="id" name="id" >
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="titulo_preguntas" name="titulo_preguntas" placeholder="Título de la pregunta" required><br>

                                    <label for="message-text" class="control-label">Descripción</label>
                                    <textarea class="form-control textArea" rows="3" id="respuesta_preguntas" name="respuesta_preguntas" placeholder="Descripción de la pregunta"></textarea>
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
        $("#titulo_preguntas").val($(this).data("titulo_preguntas"));
        $("#respuesta_preguntas").val($(this).data("respuesta_preguntas"));
    });
</script>