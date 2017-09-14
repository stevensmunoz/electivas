@extends('estudiante.plantilla.base')

@section('contenido')
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
				<div class="info-box-content">
				<span class="info-box-text">Mis Electivas</span>
					<span class="info-box-number">{{ count($mis_electivas) }}</span>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		
		<div class="col-md-6">
			<div class="box box-success">
				<div class="box-header">
					<i class="fa fa-list"></i>
					<h3 class="box-title">Electivas Disponibles</h3>
				</div>
				<div class="box-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nomber</th>
								<th>Cupos</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($electivas as $electiva)								
								<tr>
									<td>{{ $electiva->id }}</td>
									<td>{{ $electiva->nombre }}</td>
									<td>{{ $electiva->n_cupos }}</td>
									<td>
										<a href="{{ route('estudiante.materia.show', [$electiva->id]) }}" class="btn btn-info btn-xs">Inscritos</a>
										<button type="button" data-url="{{ route('ajax_inscribirse') }}" data-id="{{ $electiva->id }}" data-materia="{{ $electiva->nombre }}" class="inscribirse btn btn-success btn-xs">Inscribirse</button>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@stop

@section('script')
	{!! Html::script('administrador/js/modulos/escritorio.js') !!}
@stop