<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hypernatives', function () {
    return view('hypernatives.index');
});
