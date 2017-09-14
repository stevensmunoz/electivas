@extends('plantilla.base')

@section('titulo')
	Usuarios
@stop

@section('subtitulo')
	Gestión de Usuarios
@stop

@section('contenido')
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
				<div class="info-box-content">
				<span class="info-box-text">Total</span>
					<span class="info-box-number">{{ $usuarios->total() }}</span>
				</div>
			</div>
		</div>
	</div>

	<div class="box">
		{{-- Acciones generales --}}
		<div class="box-header">
			<div class="row">
				<div class="col-md-8">
					<a href="{{ route('admin.usuario.create') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
				</div>
			</div>
		</div>

		<div class="box-body">

			@include('plantilla.partials.success')

			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre de Usuario</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($usuarios as $usuario)
						<tr>
							<td>{{ $usuario->id }}</td>
							<td>{{ $usuario->username }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="box-footer clearfix">
			{!! $usuarios->appends(Request::only('nombre', 'tipo'))->render() !!}
		</div>
	</div>
@stop