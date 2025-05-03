<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Método POST de ejemplo
Route::post('/datos', function (Request $request) {
    // Validar los datos recibidos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mensaje' => 'nullable|string',
    ]);

    // Aquí puedes procesar los datos, guardarlos en la base de datos, etc.

    // Retornar una respuesta
    return response()->json([
        'mensaje' => 'Datos recibidos correctamente',
        'datos' => $validatedData,
    ], 201);
});

// Aquí puedes añadir tus rutas de API personalizadas
