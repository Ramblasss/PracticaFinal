<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matricula::factory()->count(20)->create();
    }
}
