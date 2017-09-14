@extends('plantilla.base')

@section('titulo')
	Estudiantes
@stop

@section('subtitulo')
	Gestión de Estudiantes
@stop

@section('contenido')
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
				<div class="info-box-content">
				<span class="info-box-text">Total</span>
					<span class="info-box-number">{{ $estudiantes->total() }}</span>
				</div>
			</div>
		</div>
	</div>

	<div class="box">

		<div class="box-body">

			@include('plantilla.partials.success')

			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@if ($estudiantes->total() > 0)
						@foreach ($estudiantes as $estudiante)
							<tr>
								<td>{{ $estudiante->id }}</td>
								<td>{{ $estudiante->nombre }}</td>
								<td>
									<a href="{{ route('estudiante_materia', ['id' => $estudiante->id]) }}" class="btn btn-sm btn-primary btn-flat">Ver Electivas</a>
								</td>
							</tr>
						@endforeach
					@else
						<td colspan="3">No hay estudiantes</td>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop