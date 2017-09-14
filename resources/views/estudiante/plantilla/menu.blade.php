<aside class="main-sidebar">
	<section class="sidebar">
		{{-- Busqueda --}}
		<!-- <form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Buscar..."/>
				<span class="input-group-btn">
					<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form> -->
		{{-- Menú Principal --}}
		<ul class="sidebar-menu">
			<li class="header">MENÚ</li>
			<li>
				<a href="{{ url('estudiante/panel/escritorio') }}">
					<i class="fa fa-dashboard"></i> <span>Escritorio</span>
				</a>
			</li>

			{{-- Electivas --}}
			<li>
				<a href="{{ url('estudiante/panel/electivas') }}">
					<i class="fa fa-list"></i> <span>Mis Electivas</span>
				</a>
			</li>
		</ul>
	</section>
</aside>