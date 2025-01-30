<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamada a los seeders para poblar la base de datos
        $this->call([
            ProfesorSeeder::class,         // Seeder para la tabla profesores
            AlumnoSeeder::class,           // Seeder para la tabla alumnos
            AsignaturaSeeder::class,       // Seeder para la tabla asignaturas
            MatriculaSeeder::class,        // Seeder para la tabla matrículas
            AlumnoAsignaturaSeeder::class, // Seeder para la tabla pivote alumno_asignatura
        ]);
    }
}
