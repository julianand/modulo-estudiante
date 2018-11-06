@extends('layouts.principal')
@section('title', 'Pruebas')
@section('styles')
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

@endsection
@section('content')

	<div id="prueba">
		<button class="btn btn-primary" v-on:click="show = !show">Mostrar</button>
		<transition name="custom" enter-active-class="animated fadeInRight" leave-active-class="animated hinge">
			<div v-if="show" class="ml-5">
	            <div v-for="(field, key) in respuesta">
	                @{{key}} = @{{field}}
	            </div>
	        </div>
		</transition>
    </div>

@endsection