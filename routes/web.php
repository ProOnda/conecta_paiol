<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.inicio');
})->name('inicio'); // Rota para a página de Início

Route::get('/sobre-nos', function () {
    return view('public.sobre-nos'); // Mapeia para a view 'sobre-nos.blade.php'
})->name('sobre-nos');

// Rota para a nova página "EXPLORAR"
Route::get('/explorar', function () {
    return view('public.explorar'); // Agora retorna a view 'public/explorar.blade.php'
})->name('explorar.index'); // Renomeada de 'produtos.index' para 'explorar.index'

Route::get('/agricultores', function () {
    return view('public.agricultores'); // Correto: Laravel procura por public/agricultores.blade.php
})->name('agricultores.index');

Route::get('/nutricionistas', function () {
    return view('public.nutricionistas'); // Ajustado para o nome do arquivo: nutricao.blade.php
})->name('nutricionistas.index');

Route::get('/contato', function () {
    return view('public.contato');
})->name('contato');

Route::get('/login', function () {
    return view('public.login');
})->name('login');

Route::get('/cadastro', function () { // Rota para o seu formulário de cadastro
    return view('public.cadastro');
})->name('cadastro');