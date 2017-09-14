<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			@yield('titulo', 'Electivas')
		</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<meta name="description" content="@yield('descripcion', 'Electivas Admin')" />
		{{-- Bootstrap --}}
		{!! Html::style('administrador/css/vendor/bootstrap.min.css') !!}
		{{-- FontAwesome 4.3.0 Ionicons 2.0.0 --}}
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		{{-- Theme style --}}
		{!! Html::style('administrador/css/theme.css') !!}
		{!! Html::style('administrador/css/theme-skin.css') !!}

		@yield('css')

	</head>

	<body class="skin-blue">
		<div class="wrapper">
			{{-- Menu top --}}
			<header class="main-header">
				<a href="{{ url('/admin') }}" class="logo"><strong>Elec</strong>tivas</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">

							{{-- Perfil usuario --}}
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="{{ asset('administrador/img/user2-160x160.jpg') }}" class="user-image" alt="Stiven castillo"/>
									<span class="hidden-xs">{{ Auth::user()->username }}</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="{{ asset('administrador/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
										<p>
											{{ Auth::user()->username }}
											<small>Username</small>
										</p>
									</li>
									<!-- Menu Body -->
									<!-- <li class="user-body">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</li> -->
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											{{-- <a href="#" class="btn btn-default btn-flat">Perfil</a> --}}
										</div>
										<div class="pull-right">
											<a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">Cerrar Sesión</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			{{-- Menu Left --}}
			@extends('plantilla.menu')

			{{-- Contenido --}}
			<div class="content-wrapper">
				{{-- Titulo y Breadcrumbs --}}
				<section class="content-header">
					<h1>
						@yield('titulo', 'Escritorio')
						<small>@yield('subtitulo', 'Control Panel')</small>
					</h1>
				</section>

				{{-- Contenido principal --}}
				<section class="content">
					@yield('contenido', "Sin Contenido para mostrar.")
				</section>
			</div>

			<footer class="main-footer">
				<div class="pull-right hidden-xs">
				
				</div>
				 
			</footer>
		</div>

		{{-- jQuery 2.1.3  --}}
		{!! Html::script('administrador/js/vendor/jquery.2.1.3.min.js') !!}
		<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
		{{-- Bootstrap --}}
		{!! Html::script('administrador/js/vendor/bootstrap.min.js') !!}
		{{-- Main js --}}
		{!! Html::script('administrador/js/app.js') !!}

		@yield('script')
	</body>
</html>