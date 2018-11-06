<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RegistroRequest;
use App\Http\Requests\LoginRequest;

use App\Rol;
use App\Persona;
use App\Usuario;
use App\Profesor;
use App\Estudiante;

class LoginController extends Controller
{
    public function getDatosRegistro () {
    	$res['roles'] = Rol::all();

    	return $res;
    }

    public function postLogin (LoginRequest $request) {
        if(!\Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            abort(500);
        }
    }

    public function postRegistro (RegistroRequest $request) {
    	$rol = $request->usuario['rol']['id'];

    	$persona = Persona::create($request->persona);

    	$usuario = new Usuario();
    	$usuario->fill($request->usuario);
    	$usuario->rol_id = $rol;
    	$usuario->persona_id = $persona->id;
    	$usuario->save();

    	$codigo = '';
    	for ($i=0; $i < 5; $i++) { 
    		$aux = rand(1,10);
    		$codigo .= $aux;
    	}

    	if($rol == Rol::where('nombre', 'Profesor')->first()->id) {
    		$profesor = new Profesor();
    		$profesor->persona_id = $persona->id;
    		$profesor->codigo = $codigo;
    		$profesor->save();
        }
        else if($rol == Rol::where('nombre', 'Estudiante')->first()->id) {
    		$estudiante = new Estudiante();
    		$estudiante->persona_id = $persona->id;
    		$estudiante->codigo = $codigo;
    		$estudiante->save();
    	}

    	return $usuario;
    }

    public function getLogout () {
        \Auth::logout();
        return \Redirect::to('/');
    }
}
