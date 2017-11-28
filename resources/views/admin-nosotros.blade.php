@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Nosotros
                            </h1>

                            <form action="{{ url('/nosotros_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Quiénes somos</label>
                                            <textarea class="form-control textArea" rows="8" id="quienes_nosotros" name="quienes_nosotros" placeholder="Descripción de quiénes somos">{{$nosotros->quienes_nosotros}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Misión</label>
                                            <textarea class="form-control textArea" rows="8" id="mision_nosotros" name="mision_nosotros" placeholder="Descripción de la misión">{{$nosotros->mision_nosotros}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Visión</label>
                                            <textarea class="form-control textArea" rows="8" id="vision_nosotros" name="vision_nosotros" placeholder="Descripción de la visión">{{$nosotros->vision_nosotros}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Imagen 1</label>
                                            <input type="file" id="imagen_uno_nosotros" name="imagen_uno_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Imagen 2</label>
                                            <input type="file" id="imagen_dos_nosotros" name="imagen_dos_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                           <center>
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Editar</button>
                                            </center>
                                        </div>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('footer-index')