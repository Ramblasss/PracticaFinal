<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Matricula;
use App\Models\Alumno;
use App\Models\Asignatura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    protected $model = Matricula::class;

    public function definition()
    {
        return [
            'alumno_id' => Alumno::factory(),
            'asignatura_id' => Asignatura::factory(),
            'fecha_matricula' => $this->faker->date('Y-m-d'),
        ];
    }
}
