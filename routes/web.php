<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.inicio');
})->name('public.inicio');

Route::get('/login', function () {
    return view('public.login');
})->name('public.login');

Route::get('/nutricao', function () {
    return view('public.nutricao');
})->name('public.nutricao');

Route::get('/quem-somos', function () {
    return view('public.quem_somos');
})->name('public.quem_somos');

Route::get('/agricultura', function () {
    return view('public.agricultura');
})->name('public.agricultura');

Route::get('/contato', function () {
    return view('public.contato');
})->name('public.contato');

Route::get('/cadastro', function () {
    return view('public.cadastro');
})->name('public.cadastro');