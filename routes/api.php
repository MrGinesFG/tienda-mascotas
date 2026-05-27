<?php
use App\Http\Controllers\Api\ArticuloController;
use App\Http\Controllers\Api\CategoriaController;

use Illuminate\Support\Facades\Route;

Route::get('/saludo', function () {
    return ['mensaje' => '¡Hola, mundo!'];
});

Route::apiResource('articulos', ArticuloController::class);
Route::apiResource('categorias', CategoriaController::class);

?>