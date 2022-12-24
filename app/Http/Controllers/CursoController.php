<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // el nombre de los métodos por convención
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', ['curso' => strtoupper($curso)]);

        /* compact('curso') es igual a  ['curso' => $curso]*/
        // return view('cursos.show', compact('curso'));
    }
}
