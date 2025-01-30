<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    // Obtener todos los alumnos
    public function index()
    {
        return response()->json(Alumno::all(), 200);
    }

    // Obtener un alumno por ID
    public function show($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        return response()->json($alumno, 200);
    }

    // Crear un nuevo alumno
    public function store(Request $request)
    {
        // Validar los datos antes de crear
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
            'fecha_nacimiento' => 'required|date',
        ]);

        $alumno = Alumno::create($request->all());
        return response()->json($alumno, 201);
    }

    // Actualizar un alumno
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }

        // Validar los datos antes de actualizar
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $id,
            'fecha_nacimiento' => 'required|date',
        ]);

        $alumno->update($request->all());
        return response()->json($alumno, 200);
    }

    // Eliminar un alumno
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        $alumno->delete();
        return response()->json(['message' => 'Alumno eliminado correctamente'], 200);
    }

    // Obtener asignaturas de un alumno
    public function asignaturas($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        return response()->json($alumno->asignaturas, 200);
    }
}
