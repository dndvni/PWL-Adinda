<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [WelcomeController::class,'hello']);

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
    return 'Nama Saya '.$name;
});

Route::get('/post/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID ".$id;
});

Route::get('/user/{name}', function ($name=null) {
    return 'Nama Saya '.$name;
});

Route::get('/user/{name?}', function ($name='Funi') {
    return 'Nama Saya '.$name;
});