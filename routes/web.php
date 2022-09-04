<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Ruta home';
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    // Consulta a base de datos
    return $slug;
});

Route::get('buscar', function (Request $request) {
    // Consulta a base de datos
    return $request->all();
});
