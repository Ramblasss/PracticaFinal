<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web de tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas ellas serán asignadas
| al grupo de middleware "web".
|
*/

Route::get('/', function () {
    return view('welcome');
});
