<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //Controlador de la ruta principal
use App\Http\Controllers\CursoController; //Controlador de los cursos

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
    // return "Bienvenido a la página Principal";
}); */
/* La ruta anterior ahora usa el controlador HomeController */
Route::get('/', HomeController::class);

/* Se utilizará 1 solo controlador para manejar todas las rutas de Cursos */
/* Route::get('cursos', function () {
    return "Bienvenido a la página Cursos";
}); */
/* La ruta anterior y las dos siguientes ahora usan el controlador CursoController */
/* Route::get('cursos', [CursoController::class, 'index']); // index es el método que se encargará de esta ruta
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']); */
/* Agrupar rutas de un mismo controlador */
Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

// Si la URL contiene crear-curso, se utiliza esta ruta gracias al orden
/* Route::get('cursos/crear-curso', function () {
    return "En esta página podrás crear un curso";
}); */

// En cambio, si la URL recibe otra variable diferente a crear-curso, se asume que es un Curso
/* Recibir una variable por URL */
/* Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso $curso desde cero";
}); */

/* Recibe dos variables */
/* Route::get('cursos/{categoria_curso}/{curso}', function ($categoria_curso, $curso) {
    return "Bienvenido al curso $curso de la categoría $categoria_curso";
});
 */

/* Esta ruta reemplaza a las dos anteriores */
/* el signo de ? después de categoria_curso indica que es opcional (se debe inicializar en null) */
/* Route::get('cursos/{curso}/{categoria_curso?}', function ($curso, $categoria_curso = null) {
    if ($categoria_curso) {
        return "Bienvenido al curso $curso de la categoría $categoria_curso";
    } else {
        return "Bienvenido al curso $curso desde cero";
    }
    
}); */