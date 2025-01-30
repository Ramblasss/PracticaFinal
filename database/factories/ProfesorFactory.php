<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    protected $model = Profesor::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'especialidad' => $this->faker->randomElement(['Matemáticas', 'Física', 'Historia', 'Lengua']),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
