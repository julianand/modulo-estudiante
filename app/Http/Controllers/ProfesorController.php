<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfesorController extends Controller
{
    public function getIndex () {
    	return view('profesor.index');
    }
}
