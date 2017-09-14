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
				<a href="{{ route('escritorio') }}">
					<i class="fa fa-dashboard"></i> <span>Escritorio</span>
				</a>
			</li>

			{{-- Electivas --}}
			<li>
				<a href="{{ route('admin.electiva.index') }}">
					<i class="fa fa-list"></i> <span>Electivas</span>
				</a>
			</li>

			{{-- Estudiantes --}}
			<li>
				<a href="{{ route('admin.estudiante.index') }}">
					<i class="fa fa-users"></i> <span>Estudiantes</span>
				</a>
			</li>

			{{-- Administracion de la plataforma --}}
			<li class="treeview">
				<a href="#">
					<i class="fa fa-cogs"></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i>
				</a>

				<ul class="treeview-menu menu-open">
					<li>
						<a href="{{ route('admin.usuario.index') }}">
							<i class="fa fa-users"></i> <span>Usuarios</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</section>
</aside>