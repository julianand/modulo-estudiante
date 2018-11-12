@extends('layouts.principal')
@section('content')
	
	<div id="@yield('el')">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">TAPPASK !!</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuContent" aria-controls="menuContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="menuContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{Request::root()}}">Inicio</a>
					</li>
					@yield('options')
				</ul>
				<div class="btn-group" role="group" >
					<a href="{{ Request::root() }}/{{ Auth::user()->rol->root }}/editar-datos" class="btn btn-light">
						Editar datos
					</a>
					<a href="{{ Request::root() }}/login/logout" class="btn btn-danger">
						Cerrar sesion
					</a>
				</div>
			</div>
		</nav>
		@yield('contentApp')
	</div>

@endsection