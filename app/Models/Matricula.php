<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'asignatura_id', 'anio_academico'];

    /**
     * Relación N:1 con Alumno
     */
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    /**
     * Relación N:1 con Asignatura
     */
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
