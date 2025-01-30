<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        return response()->json(Profesor::all(), 200);
    }

    public function show($id)
    {
        $profesor = Profesor::find($id);
        if (!$profesor) return response()->json(['error' => 'Profesor no encontrado'], 404);
        return response()->json($profesor, 200);
    }

    public function store(Request $request)
    {
        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesor::find($id);
        if (!$profesor) return response()->json(['error' => 'Profesor no encontrado'], 404);
        $profesor->update($request->all());
        return response()->json($profesor, 200);
    }

    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        if (!$profesor) return response()->json(['error' => 'Profesor no encontrado'], 404);
        $profesor->delete();
        return response()->json(['message' => 'Profesor eliminado correctamente'], 200);
    }
}
