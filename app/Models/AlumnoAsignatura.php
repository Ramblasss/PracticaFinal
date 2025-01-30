<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AlumnoAsignatura extends Pivot
{
    use HasFactory;

    protected $table = 'alumno_asignatura';  // Nombre explícito de la tabla pivote

    protected $fillable = ['alumno_id', 'asignatura_id'];  // Columnas asignables
}
