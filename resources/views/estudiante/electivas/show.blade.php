@extends('estudiante.plantilla.base')


@section('titulo')
	Materia
@stop

@section('subtitulo')
	{{ $materia->nombre }}
@stop

@section('contenido')

<div class="box box-success">
	<div class="box-header with-border">
		<i class="fa fa-info"></i>
		<h3 class="box-title">Información de la materia</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<dl class="dl-horizontal">
			<dt>Nombre</dt>
			<dd>{{ $materia->nombre }}</dd>

			<dt>Descripción</dt>
			<dd>{{ $materia->descripcion }}</dd>

			<dt>Cupos</dt>
			<dd>{{ $materia->n_cupos }}</dd>

			<dt>Profesor</dt>
			<dd>{{ $materia->profesor->nombre }}</dd>
		</dl>
	</div>
</div>

<div class="box box-success">
	<div class="box-header with-border">
		<i class="fa fa-info"></i>
		<h3 class="box-title">Inscritos</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nomber</th>
				</tr>
			</thead>
			<tbody>
				@if(count($materia->estudiante) > 0)
					@foreach ($materia->estudiante as $estudiante)
						<tr>
							<td>{{ $estudiante->id }}</td>
							<td>{{ $estudiante->nombre }}</td>
							
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="2">No hay inscritos</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>



@stop