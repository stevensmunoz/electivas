@extends('plantilla.base')

@section('titulo')
	Electivas
@stop

@section('subtitulo')
	{{ $estudiante->nombre }}
@stop

@section('contenido')
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
				<div class="info-box-content">
				<span class="info-box-text">Total de Electivas</span>
					<span class="info-box-number">{{ count($estudiante->materia) }}</span>
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
					</tr>
				</thead>
				<tbody>
					@if (count($estudiante->materia) > 0)						
						@foreach ($estudiante->materia as $materia)
							<tr>
								<td>{{ $materia->id }}</td>
								<td>{{ $materia->nombre }}</td>
							</tr>
						@endforeach
					@else
						<td colspan="2">Sin electivas</td>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop