<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;
use App\Models\Asignatura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumnoAsignatura>
 */
class AlumnoAsignaturaFactory extends Factory
{
    protected $model = Alumno::class; // No se crea un modelo para la tabla pivote

    public function definition()
    {
        return [
            'alumno_id' => Alumno::factory(),
            'asignatura_id' => Asignatura::factory(),
        ];
    }
}
