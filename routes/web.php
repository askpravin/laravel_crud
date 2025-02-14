<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hypernatives', function () {
    $hypernatives=[
        ['name'=>'Ade','age'=>20],
        ['name'=>'Bola','age'=>30],
        ['name'=>'Chidi','age'=>40],
        ['name'=>'Dapo','age'=>50],
        ['name'=>'Efe','age'=>60],
    ];
    return view('hypernatives.index',['greeting'=> 'Hello, Hypernatives!','hypernatives'=>$hypernatives]);
});
