<?php

use Illuminate\Support\Facades\Route;

//RUTA HOLA TEXT SIMPLE
Route::get('hola', function () {
    return view('HOLA HOLA COLA COLA');
});
//RUTA MSG PERSONALITZAT
Route::get('/usuari/{nom}', function ($nom) {
    return "Hola $nom, com estas?";
});
//RUTA SUMA 
Route::get('/suma/{a}/{b}', function ($a, $b) {
    $resultat = $a + $b;
    return "El resultat de la suma de $a i $b es: $resultat";
});
//RUTA INICI
Route::get('/inicio', [PaginaController::class, 'inicio']);
//RUTE CONTACTE
Route::get('/contacto', [PaginaController::class, 'contacto']);