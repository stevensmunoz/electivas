<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		@yield('titulo', 'Electivas')
	</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	{{-- Bootstrap --}}
	{!! Html::style('administrador/css/vendor/bootstrap.min.css') !!}
	{{-- FontAwesome 4.3.0 Ionicons 2.0.0 --}}
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	{{-- Theme style --}}
	{!! Html::style('administrador/css/theme.css') !!}
	{!! Html::style('administrador/css/vendor/icheck/square/blue.css') !!}
</head>
<body class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="{{ url('/') }}"><strong>Elec</strong>tivas</a>
		</div>

		{{-- Administrador --}}
		<div id="box-admin" class="login-box-body sr-only">
			{{-- Errores --}}
			@include('plantilla.partials.errors')

			<p class="login-box-msg">Inicia sesión con tus datos</p>
			{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}

				<div class="form-group has-feedback">
					{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
					<i class="glyphicon glyphicon-lock form-control-feedback"></i>
				</div>

				<div class="row">
					<div class="col-xs-8">    
						<div class="checkbox icheck">
							<label>
								<input type="checkbox" name="rememberme">Recordarme
							</label>
						</div>                        
					</div>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
					</div>
				</div>
			{!! Form::close() !!}
			<button class="btn btn-link btn-block" type="button" id="user">Entrar Como Estudiante</button>
		</div>

		{{-- Estudiante --}}
		<div id="box-user" class="login-box-body">
			{{-- Errores --}}
			@include('plantilla.partials.errors')

			<p class="login-box-msg">Inicia sesión con tus datos</p>
			{!! Form::open(['url' => 'estudiante/panel/login', 'method' => 'post', 'role' => 'form']) !!}

				<div class="form-group has-feedback">
					{!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Código']) !!}
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
				
			{!! Form::close() !!}
			<button class="btn btn-link btn-block" type="button" id="admin">Entrar Como Administrador</button>
		</div>
	</div>

	{{-- jQuery 2.1.3  --}}
	{!! Html::script('administrador/js/vendor/jquery.2.1.3.min.js') !!}
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
	{{-- Bootstrap --}}
	{!! Html::script('administrador/js/vendor/bootstrap.min.js') !!}
	{!! Html::script('administrador/js/vendor/jquery.icheck.min.js') !!}
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%'
			});

			$('#admin').on("click", function () {
				$("#box-user").addClass('sr-only');
				$("#box-admin").removeClass('sr-only');
			});

			$('#user').on("click", function () {
				$("#box-admin").addClass('sr-only');
				$("#box-user").removeClass('sr-only');
			});
		});
	</script>
</body>
</html>