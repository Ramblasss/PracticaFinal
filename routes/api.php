<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\MatriculaController; 
use App\Http\Controllers\AlumnoAsignaturaController;

// Comprobar si la API está funcionando
Route::get('/status', function () {
    return response()->json(['status' => 'API funcionando correctamente'], 200);
});

// -------------------------- Rutas de alumnos --------------------------
Route::prefix('alumnos')->group(function () {
    Route::get('/', [AlumnoController::class, 'index']); // Listar todos los alumnos
    Route::get('/{id}', [AlumnoController::class, 'show']); // Obtener un alumno por ID
    Route::post('/', [AlumnoController::class, 'store']); // Crear un nuevo alumno
    Route::put('/{id}', [AlumnoController::class, 'update']); // Actualizar un alumno
    Route::delete('/{id}', [AlumnoController::class, 'destroy']); // Eliminar un alumno
    Route::get('/{id}/asignaturas', [AlumnoController::class, 'asignaturas']); // Obtener asignaturas de un alumno
});

// -------------------------- Rutas de profesores --------------------------
Route::prefix('profesores')->group(function () {
    Route::get('/', [ProfesorController::class, 'index']); // Listar todos los profesores
    Route::get('/{id}', [ProfesorController::class, 'show']); // Obtener un profesor por ID
    Route::post('/', [ProfesorController::class, 'store']); // Crear un nuevo profesor
    Route::put('/{id}', [ProfesorController::class, 'update']); // Actualizar un profesor
    Route::delete('/{id}', [ProfesorController::class, 'destroy']); // Eliminar un profesor
    Route::get('/{id}/asignaturas', [ProfesorController::class, 'asignaturas']); // Obtener asignaturas de un profesor
});

// -------------------------- Rutas de asignaturas --------------------------
Route::prefix('asignaturas')->group(function () {
    Route::get('/', [AsignaturaController::class, 'index']); // Listar todas las asignaturas
    Route::get('/{id}', [AsignaturaController::class, 'show']); // Obtener una asignatura por ID
    Route::post('/', [AsignaturaController::class, 'store']); // Crear una nueva asignatura
    Route::put('/{id}', [AsignaturaController::class, 'update']); // Actualizar una asignatura
    Route::delete('/{id}', [AsignaturaController::class, 'destroy']); // Eliminar una asignatura
    Route::get('/{id}/alumnos', [AsignaturaController::class, 'alumnos']); // Obtener los alumnos inscritos en una asignatura
});

// -------------------------- Rutas de matrículas --------------------------
Route::prefix('matriculas')->group(function () {
    Route::get('/', [MatriculaController::class, 'index']); // Listar todas las matrículas
    Route::get('/{id}', [MatriculaController::class, 'show']); // Obtener una matrícula por ID
    Route::post('/', [MatriculaController::class, 'store']); // Crear una nueva matrícula
    Route::put('/{id}', [MatriculaController::class, 'update']); // Actualizar una matrícula
    Route::delete('/{id}', [MatriculaController::class, 'destroy']); // Eliminar una matrícula
    Route::get('/alumno/{alumnoId}', [MatriculaController::class, 'matriculasPorAlumno']); // Obtener matrículas de un alumno
    Route::get('/asignatura/{asignaturaId}', [MatriculaController::class, 'matriculasPorAsignatura']); // Obtener matrículas de una asignatura
});

// -------------------------- Rutas de la tabla pivote Alumno-Asignatura --------------------------
Route::prefix('alumno-asignatura')->group(function () {
    Route::post('/', [AlumnoAsignaturaController::class, 'store']); // Asociar alumno a asignatura
    Route::delete('/{alumnoId}/{asignaturaId}', [AlumnoAsignaturaController::class, 'destroy']); // Eliminar relación alumno-asignatura
});
