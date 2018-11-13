@extends('layouts.app')
@section('title', 'Modulo de profesor')
@section('el', 'profesor')
@section('options')
	
	<li class="nav-item">
		<a class="nav-link" href="{{Request::root()}}/profesor/clases">Clases</a>
	</li>

@endsection
@section('contentApp')
	
	<div class="container-fluid position-absolute w-100 bg-light h-100">
			<div class="row my-3">
				<div class="col-sm-7 bg-white ml-3 mr-auto p-3">
					<h2>Mis clases</h2>
					<div class="text-muted">No tienes clases registradas</div>
					<div class="row mt-3">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Nombre de clase</h5>
									<p class="card-text">Descripcion de la clase.</p>
									<a href="{{ Request::root() }}/profesor/clases/id" class="btn btn-link">URL de la clase</a>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<a href="{{ Request::root() }}/profesor/clases" class="btn btn-primary">
								Crear clase !!
							</a>
							<a href="{{ Request::root() }}/profesor/clases" class="btn btn-success">
								Ver todas las clases !!
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 bg-white mr-3 p-3">
					<h2>Tareas pendientes</h2>
					<div class="text-muted">No hay tareas pendientes.</div>
					<div class="list-group list-group-flush">
						<a href="{{ Request::root() }}/profesor/tareas/id" class="list-group-item list-group-item-action text-primary" style="border-top: none;">
							<div>
								Nombre de la tarea - Nombre de la clase
							</div>
							<div>
								Fecha de terminacion
							</div>
						</a>
					</div>
				</div>
			</div>
		{{-- </div> --}}
	</div>
		

@endsection