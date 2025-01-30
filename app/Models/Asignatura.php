<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'creditos', 'profesor_id'];

    /**
     * Relación N:1 con Profesores
     */
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    /**
     * Relación N:N con Alumnos (a través de la tabla pivote)
     */
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_asignatura');
    }
}
