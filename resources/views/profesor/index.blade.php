@extends('layouts.app')
@section('title', 'Modulo de profesor')
@section('el', 'profesor')
@section('contentApp')

	<p>hola {{Auth::user()->username}}</p>

@endsection