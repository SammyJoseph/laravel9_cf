@extends('layouts.plantilla')
@section('title', 'Inicio')

@section('main')
    <div class="container">
        <h3>Bienvenido a la página principal 2.2!</h3>
        <a href="{{route('cursos.index')}}" class="text-decoration-underline">Ver cursos</a>
    </div> 
@endsection