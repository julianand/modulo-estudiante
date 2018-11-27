@extends('layouts.app')
@section('title', 'Modulo de profesor')
@section('styles')

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">

@endsection
@section('options')
	
	<li class="nav-item">
		<a class="nav-link active" href="{{ Request::root() }}/profesor/clases">Clases</a>
	</li>

@endsection
@section('contentApp')
	
	<div class="position-absolute w-100 bg-light h-100">
		<div class="container p-3">
			<section class="bg-white p-3">
				<h2>
					Mis clases <button class="btn btn-link p-0" style="cursor: pointer;" data-toggle="modal" data-target="#nuevaClaseModal"><i class="fas fa-plus fa-lg" data-toggle="popover" data-content="Añadir clase" data-trigger="hover" data-placement="top"></i></button>
				</h2>
				<div class="row">
					<div class="col-sm-4">
						<nav class="nav nav-pills flex-column" role="tablist">
							<a href="#clase1_id" class="nav-link active" data-toggle="pill" role="tab">Clase</a>
						</nav>
					</div>
					<div class="col-sm-8">
						<div class="tab-content">
							<div id="clase1_id" class="tab-pane fade active show">
								<h2>Nombre de clase</h2>
								<small class="text-muted"><strong>Duracion: </strong>Fecha inicio - Fecha fin	</small>
								<i class="fas fa-check text-success" data-toggle="popover" data-content="Activa" data-trigger="hover"></i>
								<i class="fas fa-exclamation-circle text-danger" data-toggle="popover" data-content="Finalizada" data-trigger="hover"></i>
								<i class="fas fa-clock text-info" data-toggle="popover" data-content="En proceso de matricula" data-trigger="hover"></i>
								<br>
								<small class="text-muted"><strong>Estudiantes matriculados: </strong>(#estudiantes)</small>
								<br>
								<small class="text-muted"><strong>Capacidad de estudiantes: </strong>(capacidad)</small>
								<hr>
								<h5>Descripcion de la clase</h5>
								<p>Descripcion</p>
								<a href="{{ Request::root() }}/profesor/listado/id" class="btn btn-link pl-0">Ver listado de estudiantes</a>
								<hr>
								<h5>Tareas de la clase</h5>
								<ul>
									<li>
										<a href="{{ Request::root() }}/tareas/id">Tarea 1</a>
										<i class="fas fa-check text-success" data-toggle="popover" data-content="Activa - Finaliza: {fecha_fin}" data-trigger="hover"></i>
										<i class="fas fa-exclamation-circle text-danger" data-toggle="popover" data-content="Finalizada - Finalizo: {fecha_fin}" data-trigger="hover"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	{{-- Modal de nueva clase --}}
	<div class="modal fade" id="nuevaClaseModal" tabindex="-1" role="dialog" aria-labelledby="nuevaClaseModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-light">
					<h5 class="modal-title" id="nuevaClaseModalLabel">Nueva clase</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form @submit.prevent="enviar()">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-sm-6 form-group">
								<label for="nombre">Nombre</label>
								<input class="form-control" type="text" v-model="input.nombre" placeholder="Nombre">
							</div>
							<div class="col-sm-3 form-group">
								<label for="fecha_inicio">Fecha de inicio</label>
								<input class="form-control" type="date" v-model="input.fecha_inicio">
							</div>
							<div class="col-sm-3 form-group">
								<label for="fecha_fin">Fecha de finalizacion</label>
								<input class="form-control" type="date" v-model="input.fecha_fin">
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="descripcion w-100">Descripcion de la clase</label>
							<textarea v-model="input.descripcion" class="form-control"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<input type="submit" class="btn btn-success" value="Crear clase">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
@section('scripts')
	
	<script type="text/javascript" src="{{ asset('js/profesor_clases.js') }}"></script>

@endsection