<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Secretaria Hacienda - Sonsón</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themes.css') }}">
        <script src="{{ asset('js/vendor/modernizr-3.3.1.min.js') }}"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
    </head>    

    <body>
        <img src="img/background.jpg" alt="Secretaria Hacienda - Sonsón" class="full-bg animation-pulseSlow">
        
        <div id="login-container">
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <img src="img/logo.png">
            </h1>

            <div class="block animation-fadeInQuickInv">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="{{ url('/login') }}" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Login">
                            <i class="fa fa-user"></i>
                        </a>
                    </div>
                    <h2>Acceso</h2>
                </div>

                <form class="form-horizontal" id="form-login" accept-charset="utf-8" action="{{ url('/solicitud_cuenta') }}" method="POST" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="" name="cedula" class="form-control soloNumero" placeholder="Número de cédula" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="email" id="" name="correo" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8"></div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Solicitar</button>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="text-muted text-center animation-pullUp">
                <small class="colorWhite">
                    Alcaldía de Sonsón - Antioquia<br>
                    © 2018. Todos los derechos reservados.
                </small>
            </footer>
        </div>

        <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function (){
        $('.soloNumero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        });
    });
</script>