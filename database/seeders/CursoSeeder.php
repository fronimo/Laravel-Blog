<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->description = "El Mejor Framework de PHP";
        $curso->category = "Desarrollo Web";
        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Laravel";
        $curso2->description = "El Mejor Framework de PHP";
        $curso2->category = "Desarrollo Web";
        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Laravel";
        $curso3->description = "El Mejor Framework de PHP";
        $curso3->category = "Desarrollo Web";
        $curso3->save();
    }
}
