<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // el nombre de los métodos por convención
        return "Bienvenido a la página Cursos";
    }

    public function create(){
        return "En esta página podrás crear un curso";
    }

    public function show($curso){
        return "Bienvenido al curso " . $curso;
    }
}
