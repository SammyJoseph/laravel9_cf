<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$curso = new Curso();
        
        $curso->name = 'WordPress';
        $curso->description = 'Best CMS ever!';
        $curso->category = 'CMS';

        $curso->save();*/

        /* Seeder innecesario (por ahora), ahora se ejecuta desde DatabaseSeeder */
        // Curso::factory(50)->create(); // llenar con 50 elementos de la fábrica CursoFactory
    }
}
