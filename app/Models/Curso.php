<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $table = "users"; // ignoraría la convención por defecto Curso/cursos y ahora administraría la tabla users

    /* protected $fillable = [ // cuando se utilice la asignación masiva, solo considerar los campos:
        'name', 'category', 'description'
    ]; */
    
    protected $guarded = []; // por lógica, hace lo mismo que la propiedad anterior
    // protected $guarded = ['status']; // lo contrario de la propieda anterior (ignora los campos obvios pero protege los que se indican)

    public function getRouteKeyName() // sobreescribe el método del Model
    {
        return 'slug';
    }
}
