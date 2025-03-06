<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';

});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341720046_Adinda Mirza Devani';
});

Route::get('/user/{name}', function ($name) {
    return 'Adinda Mirza Devani'.$name;
});