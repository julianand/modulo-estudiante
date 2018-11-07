@extends('layouts.principal')
@section('content')
	
	<div id="@yield('el')">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">Navbar</a>
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
			</div>
		</nav>
		@yield('contentApp')
	</div>

@endsection