<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumnoAsignatura;

class AlumnoAsignaturaController extends Controller
{
    public function store(Request $request)
    {
        $relacion = AlumnoAsignatura::create($request->all());
        return response()->json($relacion, 201);
    }

    public function destroy($alumnoId, $asignaturaId)
    {
        $relacion = AlumnoAsignatura::where('alumno_id', $alumnoId)->where('asignatura_id', $asignaturaId)->first();
        if (!$relacion) return response()->json(['error' => 'Relación no encontrada'], 404);
        
        $relacion->delete();
        return response()->json(['message' => 'Relación eliminada correctamente'], 200);
    }
}
