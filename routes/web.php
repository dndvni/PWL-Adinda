<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});

Route::get('/post/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/user/{name}', function ($name=null) {
    return 'Nama Saya '.$name;
});

Route::get('/user/{name?}', function ($name='Funi') {
    return 'Nama Saya '.$name;
});