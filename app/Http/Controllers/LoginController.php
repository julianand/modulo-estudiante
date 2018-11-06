<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Rol;

class LoginController extends Controller
{
    public function getDatosRegistro() {
    	$res['roles'] = Rol::all();

    	return $res;
    }
}
