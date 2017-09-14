@extends('estudiante.plantilla.base')


@section('titulo')
	Mis Electivas
@stop

@section('subtitulo')
	{{ $estudiante->nombre }}
@stop

@section('contenido')

<div class="box box-success">
	<div class="box-header with-border">
		<i class="fa fa-info"></i>
		<h3 class="box-title">Electivas</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Profesor</th>
				</tr>
			</thead>
			<tbody>
				@if(count($estudiante->materia) > 0)
					@foreach ($estudiante->materia as $materia)
						<tr>
							<td>{{ $materia->id }}</td>
							<td>{{ $materia->nombre }}</td>
							<td>{{ $materia->profesor->nombre }}</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td colspan="2">No hay Materias</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>



@stop