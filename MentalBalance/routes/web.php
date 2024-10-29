<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::get('/respuestas', function () {
    return view('respuestas');
});

Route::get('/registromed', function () {
    return view('registromed');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/registrOp', function () {
    return view('registrOp');
});

Route::get('/perfilPaciente', function () {
    return view('perfilPaciente');
});
