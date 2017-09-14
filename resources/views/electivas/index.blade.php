@extends('plantilla.base')

@section('titulo')
	Electivas
@stop

@section('subtitulo')
	Gestión de Materias Electivas
@stop

@section('contenido')
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
				<div class="info-box-content">
				<span class="info-box-text">Total</span>
					<span class="info-box-number">{{ $electivas->total() }}</span>
				</div>
			</div>
		</div>
	</div>

	<div class="box">

		{{-- Acciones generales --}}
		<div class="box-header">
			<div class="row">
				<div class="col-md-8">
					<a href="{{ route('admin.electiva.create') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
				</div>
			</div>
		</div>

		<div class="box-body">

			@include('plantilla.partials.success')

			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Cupos</th>
						<th>Profesor</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@if ($electivas->total() > 0)
						@foreach ($electivas as $electiva)
							<tr>
								<td>{{ $electiva->id }}</td>
								<td>{{ $electiva->nombre }}</td>
								<td>{{ $electiva->descripcion }}</td>
								<td>{{ $electiva->n_cupos }}</td>
								<td>{{ $electiva->profesor->nombre }}</td>
								<td>
									{!! Form::open(['route' => ['admin.electiva.destroy', $electiva->id], 'method' => 'DELETE', 'role' => 'form']) !!}	
										<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Seguro que desea eliminar esta electiva? Si la elimina las inscripciones de estudiantes se anulan')"><i class="fa fa-times"></i></button>
									{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					@else
						<td colspan="3">No hay electivas</td>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop