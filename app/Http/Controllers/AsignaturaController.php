<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    public function index()
    {
        return response()->json(Asignatura::all(), 200);
    }

    public function show($id)
    {
        $asignatura = Asignatura::find($id);
        if (!$asignatura) return response()->json(['error' => 'Asignatura no encontrada'], 404);
        return response()->json($asignatura, 200);
    }

    public function store(Request $request)
    {
        $asignatura = Asignatura::create($request->all());
        return response()->json($asignatura, 201);
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::find($id);
        if (!$asignatura) return response()->json(['error' => 'Asignatura no encontrada'], 404);
        $asignatura->update($request->all());
        return response()->json($asignatura, 200);
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id);
        if (!$asignatura) return response()->json(['error' => 'Asignatura no encontrada'], 404);
        $asignatura->delete();
        return response()->json(['message' => 'Asignatura eliminada correctamente'], 200);
    }
}
