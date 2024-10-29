<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::get('/respuestas', function () {
    return view('respuestas');
});
