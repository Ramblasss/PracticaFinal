<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asignatura;
use App\Models\Profesor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignatura>
 */
class AsignaturaFactory extends Factory
{
    protected $model = Asignatura::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'creditos' => $this->faker->numberBetween(3, 6),
            'profesor_id' => Profesor::factory(),
        ];
    }
}
