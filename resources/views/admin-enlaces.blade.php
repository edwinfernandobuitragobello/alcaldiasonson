<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Secretaria Hacienda - Sonsón</title>
        <meta name="description" content="Sintracolpen - Admin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/themes.css">
        <script src="js/vendor/modernizr-3.3.1.min.js"></script>
    </head>

    <body>
        <div id="page-wrapper" class="page-loading">
            <div class="preloader">
                <div class="inner">
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
           
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                <div id="sidebar">
                    <div id="sidebar-brand" class="themed-background">
                        <a href="#" class="sidebar-title">
                            <i class="fa fa-tachometer"></i><span class="sidebar-nav-mini-hide"><strong>Bienvenido Admin</strong></span>
                        </a>
                    </div>

                    <div id="sidebar-scroll">
                        <div class="sidebar-content">
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="admin-banners.html">
                                        <i class="fa fa-rocket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Banners</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-nosotros.html">
                                        <i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Nosotros</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-servicios.html">
                                        <i class="fa fa-child sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Servicios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-galeria.html">
                                        <i class="fa fa-picture-o sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Galería</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-preguntas.html">
                                        <i class="fa fa-question sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Preguntas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-testimonios.html">
                                        <i class="fa fa-comments sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Testimonios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-enlaces.html">
                                        <i class="fa fa-link sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Enlaces</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin-contacto.html">
                                        <i class="fa fa-phone sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Contacto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 20px">
                                    Cerrar Sesión&nbsp;&nbsp;<i class="fa fa-power-off"></i>
                                </a>
                            </li>
                        </ul>
                    </header>

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
                                        <tr>
                                            <td class="text-center"><img src="img/img1.jpg" width="100%" height="auto"></td>
                                            <td>Financial Planning</td>
                                            <td>file:///F:/SONS%C3%93N/P%C3%A1gina%20Web/index.html</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarEnlace" title="Editar Enlaces" class="btn btn-effect-ripple btn-sm btn-success">Editar&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
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
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="recipient-name" class="control-label">Título</label>
                                    <input type="text" class="form-control" id="" name="" placeholder="Título del enlace" required><br>

                                    <label for="recipient-name" class="control-label">Imagen</label>
                                    <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen" disabled><br>

                                    <label for="recipient-name" class="control-label">Link</label>
                                    <input type="url" class="form-control" id="" name="" placeholder="Link del enlace" required>
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
        
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap-filestyle.min.js"> </script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function (){
        $('.soloNumero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        });
    });
</script>