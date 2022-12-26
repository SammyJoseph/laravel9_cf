<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // el nombre de los métodos por convención
        // $cursos = Curso::all();
        $cursos = Curso::paginate(5); // muestra 15 (por defecto) registros en lugar de todos

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        // return view('cursos.show', ['curso' => strtoupper($curso)]);

        /* compact('curso') es igual a  ['curso' => $curso]*/
        // return view('cursos.show', compact('curso'));

        $curso = Curso::find($id);
        // return $curso;
        return view('cursos.show', compact('curso'));
    }
}
