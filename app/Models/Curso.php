<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $table = "users"; // ignoraría la convención por defecto Curso/cursos y ahora administraría la tabla users
}
