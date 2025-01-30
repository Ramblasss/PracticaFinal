<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;

class MatriculaController extends Controller
{
    public function index()
    {
        return response()->json(Matricula::all(), 200);
    }

    public function show($id)
    {
        $matricula = Matricula::find($id);
        if (!$matricula) return response()->json(['error' => 'Matrícula no encontrada'], 404);
        return response()->json($matricula, 200);
    }

    public function store(Request $request)
    {
        $matricula = Matricula::create($request->all());
        return response()->json($matricula, 201);
    }

    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        if (!$matricula) return response()->json(['error' => 'Matrícula no encontrada'], 404);
        $matricula->update($request->all());
        return response()->json($matricula, 200);
    }

    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        if (!$matricula) return response()->json(['error' => 'Matrícula no encontrada'], 404);
        $matricula->delete();
        return response()->json(['message' => 'Matrícula eliminada correctamente'], 200);
    }
}
