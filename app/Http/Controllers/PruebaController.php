<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PruebaController extends Controller
{
	public function getIndex() {
		return view('prueba.prueba');
	}

    public function getPrueba() {
    	return 'hola';
    }

    public function postPrueba(Request $request) {
    	return $request->all();
    }
}
