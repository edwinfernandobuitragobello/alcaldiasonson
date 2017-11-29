<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Secretaria De Hacienda - Sonsón</title>

		<link href="{{ asset('cssIndex/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('font-awesomeIndex/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('jsIndex/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('jsIndex/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
		<link href="{{ asset('jsIndex/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('cssIndex/style.css') }}" rel="stylesheet">
		<link href="{{ asset('cssIndex/responsive.css') }}" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link rel="icon" type="{{ asset('imageIndex/png') }}" href="imgIndex/favicon.ico">
		
	</head>
	<body>
		<div id="inicio1" class="top-bar">
			<div class="container clearfix text-center-xs">
				<ul class="list-unstyled list-inline pull-left-lg pull-left-md pull-left-sm animation">
					<li><a href="https://www.facebook.com/sonsonprogresa/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/sonsonprogresa"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCGMNstXJnlthnxHFEhhcRhw"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
				<p class="pull-right-lg pull-right-md pull-right-sm text-right-lg text-right-md text-right-sm text-light">
					<a href="{{ url('/login') }}" ><b>Inicio de sesión</b></a>
				</p>
			</div>
		</div>

		<!--Header-->
		<header class="main-header">
			<div class="container text-center-xs">
				<div class="row">
					<div class="col-lg-3 col-sm-4 col-xs-12">
						<a href="#">
							<img src="{{ asset('imgIndex/logo.png') }}" alt="Secretaria De Hacienda - Sonsón" class="img-responsive img-center-xs logo marginLogo">
						</a>
					</div>

					<div class="col-sm-3 col-xs-12 col-lg-offset-2 hidden-xs">
						<div class="clearfix">
							<i class="fa fa-phone pull-left-lg pull-left-md pull-left-sm circle"></i>
							<h6 class="text-spl-color text-medium">Línea de atención</h6>
							<p class="text-light"><em>86944444 - 8691340 Ext 118</em></p>
						</div>
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-12 hidden-xs">
						<div class="clearfix">
							<i class="fa fa-envelope pull-left-lg pull-left-md pull-left-sm circle"></i>
							<h6 class="text-spl-color text-medium">Correo electrónico</h6>
							<p class="text-light"><em><a href="mailto:sechacienda@sonson.antioquia.gov.co">sechacienda@sonson.antioquia.gov.co</a></em></p>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!--Menú-->
		<nav id="nav" class="main-menu navbar flat">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle flat animation" data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<div class="collapse navbar-collapse navbar-cat-collapse animation">
					<ul class="nav navbar-nav text-bold">
						<li class="active"><a href="#" id="" class="dropdown-toggle" data-toggle="dropdown">Inicio</a></li>
						<li><a href="#" id="nosotros" class="dropdown-toggle" data-toggle="dropdown">Nosotros</a></li>
						<li><a href="#" id="servicios" class="dropdown-toggle" data-toggle="dropdown">Servicios</a></li>
						<li><a href="#" id="galeria" class="dropdown-toggle" data-toggle="dropdown">Galería</a></li>
						<li><a href="#" id="preguntas" class="dropdown-toggle" data-toggle="dropdown">Preguntas</a></li>
						<li><a href="#" id="testimonios" class="dropdown-toggle" data-toggle="dropdown">Testimonios</a></li>
						<li><a href="#" id="contacto" class="dropdown-toggle" data-toggle="dropdown">Contáctanos</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!--Slider home-->
		<div id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				@foreach($banners as $banner)
					<div class="item <?php if($banner->id==1){ echo "active"; } ?> ">
						<img src="{{ asset('imgIndex') }}/{{$banner->imagen_banner}}" alt="Banner-1" class="banner img-responsive">
						<div class="carousel-caption text-lite-color hidden-xs">
							<h2 class="text-medium">{{$banner->titulo_banner}}</h2>
							<h5 class="text-light">{{$banner->descripcion_banner}}</h5>
						</div>
					</div>
				@endforeach
			</div>

			<a class="left carousel-control animation" href="#main-slider" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control animation" href="#main-slider" role="button" data-slide="next">
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!--Nosotros-->
		<section id="nosotros1" class="section-area">
			<div class="main-container container">
			<h4 class="main-heading-1 text-spl-color text-normal text-uppercase">Nosotros</h4>
				<div class="row text-center-xs">
					<div class="col-sm-5 col-xs-12">
						<img src="{{ asset('imgIndex') }}/{{$nosotros->imagen_uno_nosotros}}" alt="" class="img-responsive img-style-1 img-center-xs">
						<p class="hidden visible-xs"><br></p>
					</div>

					<div class="col-sm-7 col-xs-12">
						<p class="lead"><b>¿Quiénes somos?</b></p>
						<p>{{$nosotros->quienes_nosotros}}</p>
					</div>
				</div>

				<div class="spacer-medium"></div>

				<div class="row text-center-xs">
					<div class="col-sm-7 col-xs-12">
						<p class="lead"><b>Misión</b></p>
						<p>{{$nosotros->mision_nosotros}}</p>
						<p class="lead"><b>Visión</b></p>
						<p>{{$nosotros->vision_nosotros}}</p>
					</div>

					<div class="col-sm-5 col-xs-12">
						<p class="hidden visible-xs"><br></p><br><br>
						<img src="{{ asset('imgIndex') }}/{{$nosotros->imagen_dos_nosotros}}" alt="" class="img-responsive img-style-1 img-center-xs">
					</div>
				</div>
			</div>
		</section>

		<!--Servicios-->
		<section id="servicios1" class="section-area section-style-1">
			<div class="container text-center">
				<h4 class="main-heading-1 text-spl-color text-center text-uppercase">Servicios</h4>
				<center>
					<p class="descriptionWidth">{{$servicios1->descripcion_servicios}}</p>
				</center>
				<div class="row">
					@foreach($servicios2 as $servicios)
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="box-1 sub">
								<img src="{{ asset('imgIndex')}}/{{$servicios->imagen_servicios}}" width="100%" height="auto">
								<h5 class="sub-heading-1 text-center">{{$servicios->titulo_servicios}}</h5>
								<p class="text-grey-color">
									{{$servicios->texto_servicios}}
								</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>

		<!--Galeria-->
		<section id="galeria1" class="section-area">
			<div class="main-container container text-center">
			<h4 class="main-heading-1 text-spl-color text-center text-uppercase">Galeria</h4>

				<ul class="row list-unstyled" id="gallery-grid">
					@foreach($galerias as $galeria)
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid-item" data-groups='["all", "management"]'>
							<div class="hover-content">
								<img src="{{ asset('imgIndex')}}/{{$galeria->imagen_galeria}}" alt="" class="img-responsive img-center animation-1">
								<div class="overlay animation text-lite-color">
									<h6 class="text-uppercase animation-1">{{$galeria->titulo_galeria}}</h6>
									<a href="{{ asset('imgIndex')}}/{{$galeria->imagen_galeria}}" class="btn btn-secondary animation-1"><i class="fa fa-search"></i></a>
								</div>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</section>

		<!--Preguntas frecuentes-->
		<section id="preguntas1" class="section-area">
			<div class="container text-center-xs">
				<div class="row">
					<h4 class="main-heading-1 text-spl-color text-center text-uppercase marginTop">Preguntas frecuentes</h4>
					<center>
						<p class="descriptionWidth">{{$preguntas1->descripcion_preguntas}}</p>
					</center>

					<div class="col-md-6 col-xs-12">
						<div class="panel-group" id="accordion-faqs">
							<?php $i = 0; ?>
							@foreach($preguntas2 as $preguntas)
								<?php $i++ ?>
								<?php if($i<=3){ ?>
									<div class="panel flat">
										<div class="panel-heading flat">
											<h5 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse<?php echo $i; ?>">
													{{$preguntas->titulo_preguntas}}
												</a>
											</h5>
										</div>
										<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
											<div class="panel-body">
												<p>{{$preguntas->respuesta_preguntas}}</p>
											</div>
										</div>					
									</div>
								<?php } ?>
							@endforeach
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="panel-group" id="accordion-faqs">
							<?php $i = 0; ?>
							@foreach($preguntas2 as $preguntas)
								<?php $i++ ?>
								<?php if($i>=4){ ?>
								<div class="panel flat">
									<div class="panel-heading flat">
										<h5 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-faqs" href="#collapse<?php echo $i; ?>">
												{{$preguntas->titulo_preguntas}}
											</a>
										</h5>
									</div>

									<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
										<div class="panel-body">
											<p>{{$preguntas->respuesta_preguntas}}</p>
										</div>
									</div>					
								</div>
								<?php } ?>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--Testimonios-->
		<section id="testimonios1" class="section-area section-testimonials">
			<div class="container text-center-xs">
				<h4 class="main-heading-1 text-spl-color text-center text-normal text-uppercase">Testimonios</h4>
				<div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner text-center-sm">
						<div class="item active">
							<div class="row">
								<?php $i = 0; ?>
								@foreach($testimonios as $testimonio)
									<?php $i++ ?>
									<?php if($i<=3){ ?>
										<div class="col-sm-4 col-xs-12">
											<div class="testimonial-box">
												<p class="text-light">
													{{$testimonio->descripcion_testimonios}}
												</p>
												<ul class="list-unstyled clearfix">
													<li class="pull-left-lg pull-left-md">
														<img src="{{ asset('imgIndex')}}/{{$testimonio->imagen_testimonios}}" alt="" class="img-responsive img-center-sm img-center-xs circle">
													</li>
													<li class="pull-left-lg pull-left-md">
														<h6 class="text-spl-color text-medium">{{$testimonio->nombre_testimonios}}</h6>
														<span class="text-grey-color text-light">{{$testimonio->cargo_testimonios}}</span>
													</li>
												</ul>
											</div>
										</div>
									<?php } ?>
								@endforeach
							</div>						
						</div>

						<div class="item">
							<div class="row">
								<?php $i = 0; ?>
								@foreach($testimonios as $testimonio)
									<?php $i++ ?>
									<?php if(($i>=4) AND ($i<=6) ){ ?>
										<div class="col-sm-4 col-xs-12">
											<div class="testimonial-box">
												<p class="text-light">
													{{$testimonio->descripcion_testimonios}}
												</p>
												<ul class="list-unstyled clearfix">
													<li class="pull-left-lg pull-left-md">
														<img src="{{ asset('imgIndex')}}/{{$testimonio->imagen_testimonios}}" alt="" class="img-responsive img-center-sm img-center-xs circle">
													</li>
													<li class="pull-left-lg pull-left-md">
														<h6 class="text-spl-color text-medium">{{$testimonio->nombre_testimonios}}</h6>
														<span class="text-grey-color text-light">{{$testimonio->cargo_testimonios}}</span>
													</li>
												</ul>
											</div>
										</div>
									<?php } ?>
								@endforeach
							</div>						
						</div>

						<div class="item">
							<div class="row">
								<?php $i = 0; ?>
								@foreach($testimonios as $testimonio)
									<?php $i++ ?>
									<?php if ($i>=7) { ?>
										<div class="col-sm-4 col-xs-12">
											<div class="testimonial-box">
												<p class="text-light">
													{{$testimonio->descripcion_testimonios}}
												</p>
												<ul class="list-unstyled clearfix">
													<li class="pull-left-lg pull-left-md">
														<img src="{{ asset('imgIndex')}}/{{$testimonio->imagen_testimonios}}" alt="" class="img-responsive img-center-sm img-center-xs circle">
													</li>
													<li class="pull-left-lg pull-left-md">
														<h6 class="text-spl-color text-medium">{{$testimonio->nombre_testimonios}}</h6>
														<span class="text-grey-color text-light">{{$testimonio->cargo_testimonios}}</span>
													</li>
												</ul>
											</div>
										</div>
									<?php } ?>
								@endforeach
							</div>						
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-testimonials" data-slide-to="1"></li>
						<li data-target="#carousel-testimonials" data-slide-to="2"></li>
					</ol>
				</div>
			</div>
		</section><br>

		<!--Aliados-->
		<div class="partners-list">
			<div class="container">
				<ul class="list-unstyled row">
					@foreach($enlaces as $enlace)
						<li class="col-xs-2">
							<a href="{{$enlace->link_enlaces}}" target="_blank">
								<img src="{{ asset('imgIndex')}}/{{$enlace->imagen_enlaces}}" alt="{{$enlace->titulo_enlaces}}" class="img-responsive img-center">
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div><br><br><br>

		<!--Contacto 1-->
		<div id="contacto1" class="main-container container text-center-xs">
			<div class="row">
				<div class="col-sm-8 col-xs-12">
					<h4 class="main-heading-1 text-spl-color text-uppercase text-normal">Contáctanos</h4>
					<div class="contact-form-wrap">
						<form class="contact-form" action="{{ url('/enviar_email') }}" method="POST" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">

								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="fname" class="sr-only">Nombres: </label>
										<input type="text" class="form-control flat" name="nombre_correo" id="" required="required" maxlength="45" placeholder="Nombres">
									</div>
								</div>

								<div class="col-sm-6 col-xs-12">
									<div class="form-group">
										<label for="lname" class="sr-only">Apellidos: </label>
										<input type="text" class="form-control flat" name="Apellidos_correo" id="" required="required" maxlength="45" placeholder="Apellidos">
									</div>
								</div>

								<div class="col-xs-12">
									<div class="form-group">
										<label for="email" class="sr-only">Correo: </label>
										<input type="email" class="form-control flat" name="correo_correo" id="" required="required" maxlength="45" placeholder="Correo">
									</div>
								</div>

								<div class="col-xs-12">
									<div class="form-group">
										<label for="message" class="sr-only">Mensaje: </label>
										<textarea class="form-control flat textArea" rows="8" name="mensaje_correo" id="" required="required" maxlength="900" placeholder="Mensaje"></textarea>
									</div>
								</div>

								<div class="col-xs-12">
									<input type="submit" class="btn btn-secondary btn-big animation" value="Enviar mensaje">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="col-xs-12 hidden visible-xs">
					<p class="spacer-small"></p>
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="sblock-2">
						<h5>Nuestra sede</h5>
						<ul class="list-unstyled address-list">
							<li class="clearfix">
								<i class="fa fa-map-marker pull-left"></i> 
								<span class="pull-left">
									<b>Dirección:</b><br> 
									{{$contactos->direccion_contactos}}
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone pull-left"></i> 
								<span class="pull-left">
									<b>Teléfono:</b><br>
									{{$contactos->telefono_contactos}}
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope pull-left"></i> 
								<span class="pull-left">
									<b>Correo:</b><br> 
									<a href="mailto:{{$contactos->correo_contactos}}" class="colorBlue">{{$contactos->correo_contactos}}</a>
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-clock-o pull-left"></i> 
								<span class="pull-left">
									<b>Horario de atención:</b><br> 
									{{$contactos->horario_contactos}} 
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-thumbs-o-up pull-left"></i> 
								<span class="pull-left lineHeight">
									<b>Síguenos en:</b><br>
									<a href="{{$contactos->facebook_contactos}}"><i class="fa fa-facebook" style="font-size: 30px;"></i></a>
									<a href="{{$contactos->twitter_contactos}}"><i class="fa fa-twitter" style="font-size: 30px;"></i></a>
									<a href="{{$contactos->youtube_contactos}}"><i class="fa fa-youtube-play" style="font-size: 30px;"></i></a>
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!--Map-->
		<div id="map"></div>

		<!--Contacto 2-->
		<section class="footer-top">
			<div class="container text-center-xs text-lite-color">
				<div class="row">

					<div class="col-md-5 col-sm-6 col-xs-12">
						<h5>Contáctanos</h5>
						<ul class="list-unstyled foot-address-list text-light">
							<li class="clearfix">
								<i class="fa fa-map-marker"></i> 
								<span>
									<b>Dirección</b><br>
									{{$contactos->direccion_contactos}}
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-phone"></i> 
								<span>
									<b>Teléfono</b><br>
									{{$contactos->telefono_contactos}}
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope"></i>
								<span>
									<b>Correo</b><br>
									<a href="mailto:{{$contactos->correo_contactos}}">{{$contactos->correo_contactos}}</a>
								</span> 
							</li>
							<li class="clearfix">
								<i class="fa fa-clock-o"></i> 
								<span>
									<b>Horario de atención</b><br>
									{{$contactos->horario_contactos}}
								</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-thumbs-o-up"></i> 
								<span>
									<b>Síguenos en:</b><br>
									<a href="{{$contactos->facebook_contactos}}"><i class="fa fa-facebook" style="font-size: 25px;"></i></a>
									<a href="{{$contactos->twitter_contactos}}"><i class="fa fa-twitter" style="font-size: 25px;"></i></a>
									<a href="{{$contactos->youtube_contactos}}"><i class="fa fa-youtube-play" style="font-size: 25px;"></i>
								</span>
							</li>
						</ul>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<h5>Servicios</h5>
						<ul class="list-unstyled foot-list-style-1 text-light">
							@foreach($servicios2 as $servicios)
								<li>{{$servicios->titulo_servicios}}</li>
							@endforeach			
						</ul>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<a class="twitter-timeline" href="https://twitter.com/Sintracolpen1?ref_src=twsrc%5Etfw" height="470" data-chrome="nofooter">Tweets por Sintracolpen</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
		</section>

		<!--Footer-->
		<footer class="copyright">
			<div class="container text-center text-lite-color">
				<em class="text-light">
					<b><a href="#" id="inicio" class="dropdown-toggle" data-toggle="dropdown">Alcaldía de Sonsón - Antioquia</a></b><br>
					&copy; 2018. Todos los derechos reservados.
				</em>
			</div>
		</footer>

		<script src="{{ asset('jsIndex/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('jsIndex/jquery-migrate-1.4.1.min.js') }}"></script>	
		<script src="{{ asset('jsIndex/bootstrap.min.js') }}"></script>
		<script src="{{ asset('jsIndex/plugins/backstretch/jquery.backstretch.min.js') }}"></script>
		<script src="{{ asset('jsIndex/plugins/shuffle/jquery.shuffle.modernizr.min.js') }}"></script>
		<script src="{{ asset('jsIndex/plugins/owl-carousel/owl.carousel.js') }}"></script>
		<script src="{{ asset('jsIndex/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('jsIndex/custom.js') }}"></script>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBJuX7MUGkO38AxIIn0K4rIZV5kba7M0&callback=initMap"></script>	
		<script type="text/javascript">
			//Map
	        function initMap() {
	            var position = {lat: {{$contactos->latitud_contactos}}, lng: {{$contactos->logitud_contactos}}};
	            var map = new google.maps.Map(document.getElementById('map'), {
	                zoom: 14,
	                center: position,
	                disableDefaultUI: true
	            });
	            var marker = new google.maps.Marker({
	                position: position,
	                title: 'Alcaldía de Sonsón - Antioquia',
	                map: map
	            });
	        }

	        //Ancle
	        function inicio(){
		  		var posicion= $("#inicio1").offset().top; $("html, body").animate({scrollTop:posicion+"px"});
			}
			$("#inicio").click(function(){ inicio(); });

	        function nosotros(){
		  		var posicion= $("#nosotros1").offset().top; $("html, body").animate({scrollTop:posicion+"px"});
			}
			$("#nosotros").click(function(){ nosotros(); });

	        function servicios(){
		  		var posicion= $("#servicios1").offset().top; $("html, body").animate({scrollTop:posicion+"px"});
			}
			$("#servicios").click(function(){ servicios(); });

			function galeria(){
		  		var posicion= $("#galeria1").offset().top; $("html, body").animate({scrollTop:posicion+"px"});
			}
			$("#galeria").click(function(){ galeria(); });

			function preguntas(){
		  		var posicion= $("#preguntas1").offset().top; $("html, body").animate({scrollTop:posicion-100+"px"});
			}
			$("#preguntas").click(function(){ preguntas(); });

			function testimonios(){
		  		var posicion= $("#testimonios1").offset().top; $("html, body").animate({scrollTop:posicion+"px"});
			}
			$("#testimonios").click(function(){ testimonios(); });

			function contacto(){
		  		var posicion= $("#contacto1").offset().top; $("html, body").animate({scrollTop:posicion-50+"px"});
			}
			$("#contacto").click(function(){ contacto(); });
	    </script>
	</body>
</html>