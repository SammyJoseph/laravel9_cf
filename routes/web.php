<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //Controlador de la ruta principal
use App\Http\Controllers\CursoController; //Controlador de los cursos
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class); // route resource reemplaza todas las rutas anteriores de Curso siguiendo las convencione

Route::view('nosotros', 'about')->name('about');

Route::get('contact', function () {
    $correo = new ContactMailable;
    Mail::to('sam.tab.paz@gmail.com')->send($correo);

    return 'Mensaje enviado';
});