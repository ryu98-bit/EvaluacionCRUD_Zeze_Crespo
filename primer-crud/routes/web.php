<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
return view('welcome');
});

// Ruta resource: genera las 7 rutas CRUD automáticamente
Route::resource('tareas', TareaController::class);