@extends('layouts.app')
@section('title', 'Modulo de profesor')
@section('el', 'clases_profesor')
@section('styles')

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">

@endsection
@section('options')
	
	<li class="nav-item">
		<a class="nav-link active" href="{{Request::root()}}/profesor/clases">Clases</a>
	</li>

@endsection
@section('contentApp')
	
	<div class="position-absolute w-100 bg-light h-100">
		<div class="container p-3">
			<section class="bg-white p-3">
				<h2>
					Mis clases <span class="text-primary" style="cursor: pointer;" data-toggle="popover" data-content="Añadir clase" data-trigger="hover" data-placement="top"><i class="fas fa-plus fa-xs"></i></span>
				</h2>
				<div class="row">
					<div class="col-sm-4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit repellendus, quasi, ullam cum quis iusto consequuntur ipsum dignissimos repellat adipisci ut, cumque aliquid! Incidunt dolores nihil animi natus rerum repudiandae.
					</div>
					<div class="col-sm-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos vero, nostrum. Dolor distinctio, voluptas labore sapiente voluptatum nostrum dignissimos modi porro nisi eveniet rerum unde quisquam voluptatibus praesentium hic consectetur.
					</div>
				</div>
			</section>
		</div>
	</div>

@endsection