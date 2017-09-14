@extends('plantilla.base')


@section('titulo')
	Nueva Electiva
@stop

@section('subtitulo')
	Registrar nueva materia electiva
@stop

@section('contenido')

	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Ingrese todos los datos</h3>
				</div>
			
				<div class="box-body">
					@include('plantilla.partials.errors')
					
					{!! Form::open(['route' => 'admin.electiva.store', 'method' => 'post', 'role' => 'form']) !!}
						{!! Form::hidden('id_usuario', \Auth::user()->id) !!}
						@include('electivas.partials.labels')

						<button class="btn btn-success" type="submit" name="guardar"><i class="fa fa-save"></i> Guardar</button>
					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
@stop