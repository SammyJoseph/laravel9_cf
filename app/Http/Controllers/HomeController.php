<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //este método se utiliza cuando administramos una sola ruta
    {
        // return view('welcome'); // vista por defecto de laravel
        return view('home'); // usando una vista personalizada
    }
    
}
