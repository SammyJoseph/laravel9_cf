<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    public function index(){ // el nombre de los métodos por convención
        // $cursos = Curso::all();
        $cursos = Curso::orderBy('id', 'desc')->paginate(10); // muestra 15 (por defecto) registros en lugar de todos

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show(Curso $curso){
        // return view('cursos.show', ['curso' => strtoupper($curso)]);

        /* compact('curso') es igual a  ['curso' => $curso]*/
        // return view('cursos.show', compact('curso'));

        // $curso = Curso::find($id);
        // return $curso;
        return view('cursos.show', compact('curso'));
    }

    // public function store(Request $request){ // Request almacena la información del formulario en un objeto
    public function store(StoreCurso $request){ // Cambió de Request a StoreCurso para validaciones pero funciona igual
        /* Validación de formulario (se movió a StoreCurso)*/
        /* $request->validate([
            'name'  => 'required|max:15',
            'category'  => 'required|max:15',
            'description'  => 'required|min:10'
        ]); */

        // return $request->all();

        /* $curso = new Curso();
        $curso->name = $request->name;
        $curso->category = $request->category;
        $curso->description = $request->description;
        // return $curso;
        $curso->save(); */
        
        $request->merge([ 
            'slug' => Str::slug($request->name), // agregar slug
        ]);
        $curso = Curso::create($request->all()); // asignación masiva... reemplaza dinámicamente el bloque anterior (crea el objeto y luego save())... se debe agregar la propiedad $fillable en el modelo Curso

        // return $curso->slug;
        return redirect()->route('cursos.show', $curso); // error por solucionar (en la laptop sí funciona wtf! -> la extensión live reload)
        // return view('cursos.show', compact('curso')); // solución temporal
    }

    /* public function edit($id){
        $curso = Curso::find($id);
        return $curso;
    } */
    public function edit(Curso $curso){
        // return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([
            'name'  => 'required|max:15',
            'category'  => 'required|max:15',
            'description'  => 'required|min:10'
        ]);

        $request->merge([ 
            'slug' => Str::slug($request->name), // agregar slug
        ]);

        $curso->update($request->all()); // asignación masiva (reemplaza el bloque anterior)

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
