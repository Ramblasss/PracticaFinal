<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NombreDelController extends Controller
{
    /**
     * Muestra una lista de recursos.
     */
    public function index()
    {
        return response()->json(['message' => 'Listado de recursos'], 200);
    }

    /**
     * Almacena un nuevo recurso.
     */
    public function store(Request $request)
    {
        return response()->json(['message' => 'Recurso creado'], 201);
    }

    /**
     * Muestra un recurso específico.
     */
    public function show($id)
    {
        return response()->json(['message' => "Mostrando recurso con ID: $id"], 200);
    }

    /**
     * Actualiza un recurso existente.
     */
    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Recurso con ID $id actualizado"], 200);
    }

    /**
     * Elimina un recurso existente.
     */
    public function destroy($id)
    {
        return response()->json(['message' => "Recurso con ID $id eliminado"], 200);
    }
}
