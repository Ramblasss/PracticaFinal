<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesores = [
            ['nombre' => 'Juan Pérez', 'especialidad' => 'Matemáticas', 'email' => 'juan.perez@example.com'],
            ['nombre' => 'Ana Gómez', 'especialidad' => 'Física', 'email' => 'ana.gomez@example.com'],
            ['nombre' => 'Luis Fernández', 'especialidad' => 'Química', 'email' => 'luis.fernandez@example.com'],
            ['nombre' => 'Carlos Ruiz', 'especialidad' => 'Historia', 'email' => 'carlos.ruiz@example.com'],
            ['nombre' => 'María López', 'especialidad' => 'Inglés', 'email' => 'maria.lopez@example.com']
        ];

        foreach ($profesores as $profesor) {
            Profesor::firstOrCreate(['email' => $profesor['email']], $profesor);
        }
    }
}
