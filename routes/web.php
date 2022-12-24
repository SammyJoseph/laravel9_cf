<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    // return "Bienvenido a la página Principal";
});

Route::get('cursos', function () {
    return "Bienvenido a la página Cursos";
});

// Si la URL contiene crear-curso, se utiliza esta ruta gracias al orden
Route::get('cursos/crear-curso', function () {
    return "En esta página podrás crear un curso";
});

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
Route::get('cursos/{curso}/{categoria_curso?}', function ($curso, $categoria_curso = null) {
    if ($categoria_curso) {
        return "Bienvenido al curso $curso de la categoría $categoria_curso";
    } else {
        return "Bienvenido al curso $curso desde cero";
    }
    
});