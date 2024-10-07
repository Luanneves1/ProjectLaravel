<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'João';

    $arr = [1,2,3,4,5];

    return view('welcome',
    [   "nome" => $nome,
        "arr" => $arr
    ]);
});

Route::get('/produtos', function () {
    return view('product');
});
