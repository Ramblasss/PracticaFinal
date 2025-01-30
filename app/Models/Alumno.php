<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Campos que son asignables masivamente
    protected $fillable = ['nombre', 'email', 'fecha_nacimiento'];

    /**
     * Relación N:N con Asignaturas (a través de la tabla pivote)
     */
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'alumno_asignatura');
    }

    /**
     * Relación 1:N con Matrículas
     */
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
