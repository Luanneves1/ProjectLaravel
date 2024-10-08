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

Route::get('/produtos/{id}', function ($id) {
    return view('product',['id' => $id]);
});

