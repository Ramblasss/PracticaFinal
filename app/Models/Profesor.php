<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'profesores';

    protected $fillable = ['nombre', 'especialidad', 'email'];

    /**
     * Relación 1:N con Asignaturas
     */
    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class);
    }
}
