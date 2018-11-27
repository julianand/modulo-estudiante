@extends('layouts.principal')
@section('title', 'Login')
@section('content')
	
	<div id="login" class="bg-light"  style="position: absolute; height: 100%; width: 100%;">
		<div class="row justify-content-center">
			<div class="col-sm-6 bg-white mt-5 rounded">
				<form class="py-3 px-2" @submit.prevent="login()">
					<h2>TAPPASK!</h2>
					<div class="form-group">
						<label for="username">Usuario</label>
						<input type="text" class="form-control" v-model="usuarioInput.username" placeholder="Usuario">
						<small v-if="errors.username" class="text-danger">@{{errors.username[0]}}</small>
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" v-model="usuarioInput.password" @keypress.space.prevent placeholder="Contraseña"> 
						<small v-if="errors.password" class="text-danger">@{{errors.password[0]}}</small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Entrar">
						<button type="button" class="btn btn-link text-secondary" @click="abrirRegistroModal()">Registrate</button>
					</div>
				</form>
			</div>
		</div>

		{{-- Modal de registro --}}
		<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header bg-light">
						<h5 class="modal-title" id="registroModalLabel">Registro</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form @submit.prevent="registrar()">
						<div class="modal-body">
							<div class="form-row">
								<div class="form-group col-sm-10">
									<label for="nombre">Nombre</label>
									<input class="form-control" type="text" v-model="registroInput.persona.nombre" placeholder="Nombre">
									<small v-if="errors['persona.nombre']" class="text-danger">@{{errors['persona.nombre'][0]}}</small>
								</div>
								<div class="form-group col-sm-2">
									<label for="edad">Edad</label>
									<input class="form-control" type="text" v-model="registroInput.persona.edad" placeholder="Edad">
									<small v-if="errors['persona.edad']" class="text-danger">@{{errors['persona.edad'][0]}}</small>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-4">
									<label for="username">Nombre de usuario</label>
									<input class="form-control" type="text" v-model="registroInput.usuario.username" placeholder="Usuario">
									<small v-if="errors['usuario.username']" class="text-danger">@{{errors['usuario.username'][0]}}</small>
								</div>
								<div class="form-group col-sm-5">
									<label for="password">Contraseña</label>
									<input class="form-control" type="password" v-model="registroInput.usuario.password" @keypress.space.prevent placeholder="Contraseña">
									<small v-if="errors['usuario.password']" class="text-danger">@{{errors['usuario.password'][0]}}</small>
								</div>
								<div class="form-group col-sm-3">
									<label for="rol">Rol</label>
									<select class="form-control" v-model="registroInput.usuario.rol">
										<option :value="undefined" hidden>Seleccione...</option>
										<option v-for="rol in datos.roles" :key="rol.id" v-bind:value="rol">
											@{{rol.nombre}}
										</option>
									</select>
									<small v-if="errors['usuario.rol']" class="text-danger">@{{errors['usuario.rol'][0]}}</small>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input class="btn btn-success" type="submit" value="Registrar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('scripts')

	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	
@endsection