<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PublicController extends Controller
{
    public function agricultura(): View
    {
        return view('public.agricultura');
    }

    public function cadastro(): View
    {
        return view('public.cadastro');
    }

    public function contato(): View
    {
        return view('public.contato');
    }

    public function inicio(): View
    {
        return view('public.inicio');
    }

    public function login(): View
    {
        return view('public.login');
    }

    public function nutricao(): View
    {
        return view('public.nutricao');
    }

    public function quemSomos(): View
    {
        return view('public.quem_somos');
    }

    // Você pode adicionar um método para a página inicial também,
    // que pode ser o mesmo que 'inicio' ou um arquivo separado.
    public function homepage(): View
    {
        return view('public.inicio'); // Ou view('public.homepage'); se você criar um arquivo homepage.blade.php
    }
}