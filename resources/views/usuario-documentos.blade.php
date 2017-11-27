@include('header')
@include('usuario-menu')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Documentos
                            </h1>
                            <div class="row">
                                <div class="col-md-3">
                                    <form action="{{ url('/documentos_usuario') }}" method="GET" role="form">
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
                                            <th>Archivo</th>
                                            <th>Fecha Publicación</th>
                                            <th>Fecha Finalización</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($asignaciones as $asignacion)
                                            <tr>
                                                <td>{{$asignacion->titulo_asignacion}}</td>
                                                <td>{{$asignacion->pdf_asignacion}}</td>
                                                <td>{{$asignacion->fecha_inicio_asignacion}}</td>
                                                <td>{{$asignacion->fecha_fin_asignacion}}</td>
                                                <td class="text-center">
                                                    <?php if ($asignacion->boton==1){ ?>
                                                        <a download="{{$asignacion->pdf_asignacion}}" href="{{ url('uploads') }}/{{$asignacion->pdf_asignacion}}" title="Descargar Archivo" class="btn btn-effect-ripple btn-sm btn-success">Descargar&nbsp;&nbsp;<i class="fa fa-download"></i></a>
                                                    <?php }else{ ?>
                                                        <a href="#" title="Descargar Archivo" class="btn btn-effect-ripple btn-sm btn-warning">No disponible&nbsp;&nbsp;<i class="fa fa-ban"></i></a>
                                                    <?php } ?>
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
@include('footer')