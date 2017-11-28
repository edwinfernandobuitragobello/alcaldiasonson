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
                                    <a href="{{url('/admin_banners')}}">
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