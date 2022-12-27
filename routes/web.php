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

Route::get('/', HomeController::class);

/* Agrupar rutas del Curso */
/* Route::controller(CursoController::class)->group(function () {
    Route::get('cursos', 'index')->name('c.index');
    Route::get('cursos/create', 'create')->name('c.create');
    Route::get('cursos/{id}', 'show')->name('c.show');
    Route::post('cursos', 'store')->name('c.store'); // ruta para guardar el formulario en la BD
    Route::get('cursos/{curso}/edit', 'edit')->name('c.edit'); // carga la el curso a editar en el formulario
    Route::put('cursos/{curso}', 'update')->name('c.update');
    Route::delete('cursos/{curso}', 'destroy')->name('c.destroy');
}); */
Route::resource('cursos', CursoController::class); // route resource reemplaza todas las rutas anteriores de Curso siguiendo las convenciones
// Route::resource('cursitos', CursoController::class)->names('cursos'); // cambia las url pero deja el nombre de las rutas en 'cursos'
// Route::resource('cursitos', CursoController::class)->parameter('cursitos', 'curso')->names('cursos'); // parameter() indica el nombre de la variable