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
						<input type="text" class="form-control" v-model="usuarioInput.username">
						<small class="text-danger"></small>
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" v-model="usuarioInput.password" @keypress.space.prevent>
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
					<form @submit.prevent="registro()">
						<div class="modal-body">
							<div class="form-row">
								<div class="form-group col-sm-10">
									<label for="nombre">Nombre</label>
									<input class="form-control" type="text" v-model="registroInput.persona.nombre">
								</div>
								<div class="form-group col-sm-2">
									<label for="edad">Edad</label>
									<input class="form-control" type="text" v-model="registroInput.persona.edad">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-4">
									<label for="username">Nombre de usuario</label>
									<input class="form-control" type="text" v-model="registroInput.usuario.username">
								</div>
								<div class="form-group col-sm-5">
									<label for="username">Contraseña</label>
									<input class="form-control" type="password" v-model="registroInput.usuario.password" @keypress.space.prevent>
								</div>
								<div class="form-group col-sm-3">
									<label for="rol">Rol</label>
									<select class="form-control" v-model="registroInput.usuario.rol">
										<option :value="null" hidden>Seleccione...</option>
										<option v-for="rol in datos.roles" :key="rol.id" v-bind:value="rol">
											@{{rol.nombre}}
										</option>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input class="btn btn-success" value="Registrar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection