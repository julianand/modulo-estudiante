<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfesorController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function getIndex () {
    	return view('profesor.index');
    }

    public function getClases () {
    	return view('profesor.clases');
    }
}
