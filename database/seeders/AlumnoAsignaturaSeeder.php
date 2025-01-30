<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoAsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumno_asignatura')->insert([
            ['alumno_id' => 1, 'asignatura_id' => 1],
            ['alumno_id' => 2, 'asignatura_id' => 2],
            ['alumno_id' => 3, 'asignatura_id' => 1],
            ['alumno_id' => 4, 'asignatura_id' => 3],
            ['alumno_id' => 5, 'asignatura_id' => 2],
            ['alumno_id' => 6, 'asignatura_id' => 4],
        ]);
    }
}
