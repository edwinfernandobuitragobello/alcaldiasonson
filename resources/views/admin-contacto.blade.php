@include('header')
@include('menu-index')
                    <div id="page-content">
                        <div class="block">
                            <h1 class="page-header margin-title">
                                Contacto
                            </h1>

                            <form action="{{ url('/contacto_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control" id="direccion_contactos" name="direccion_contactos" value="{{$contactos->direccion_contactos}}" placeholder="Dirección de la sede" required><br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input type="text" class="form-control" id="telefono_contactos" name="telefono_contactos" value="{{$contactos->telefono_contactos}}" placeholder="Teléfono de la sede" required><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="email" class="form-control" id="correo_contactos" name="correo_contactos" value="{{$contactos->correo_contactos}}" placeholder="Correo de la sede" required><br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Horario de atención</label>
                                            <input type="text" class="form-control" id="horario_contactos" name="horario_contactos" value="{{$contactos->horario_contactos}}" placeholder="Horario de atención de la sede" required><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Latitud</label>
                                            <input type="text" class="form-control" id="latitud_contactos" name="latitud_contactos" value="{{$contactos->latitud_contactos}}" placeholder="Latitud mapa de contacto" required><br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Longitud</label>
                                            <input type="text" class="form-control" id="logitud_contactos" name="logitud_contactos" value="{{$contactos->logitud_contactos}}" placeholder="Longitud mapa de contacto" required><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="url" class="form-control" id="facebook_contactos" name="facebook_contactos" value="{{$contactos->facebook_contactos}}" placeholder="Link facebook" required><br>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="url" class="form-control" id="twitter_contactos" name="twitter_contactos" value="{{$contactos->twitter_contactos}}" placeholder="Link Twitter" required><br>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="url" class="form-control" id="youtube_contactos" name="youtube_contactos" value="{{$contactos->youtube_contactos}}" placeholder="Link Youtube" required><br>
                                        </div>
                                    </div>
                                </div>

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