@extends('plantilla.base')

@section('contenido')
<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
			<div class="info-box-content">
			<span class="info-box-text">Estudiantes</span>
				<span class="info-box-number">20</span>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
			<div class="info-box-content">
			<span class="info-box-text">Usuarios</span>
				<span class="info-box-number">{{ $usuarios }}</span>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-red"><i class="fa fa-list"></i></span>
			<div class="info-box-content">
			<span class="info-box-text">Electivas</span>
				<span class="info-box-number">20</span>
			</div>
		</div>
	</div>

	
</div>
@stop