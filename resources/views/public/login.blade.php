@extends('layouts.auth')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/public/login.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('title', 'Entrar')

@section('content')
<section class="LOGIN">
    <div class="overlap-wrapper">
        <div class="overlap">
            <img class="rectangle" src="{{ asset('img/public/diagonal-green-shape.svg') }}" alt="Detalhe de Design Verde Diagonal" />
            <img class="favicon" src="{{ asset('img/shared/Logo.jpg') }}" alt="Logo Conecta Paiol de Saberes" />

            <form class="group" method="POST" action="{{ route('login') }}">
                @csrf {{-- Token CSRF para segurança no Laravel --}}

                <div class="input-container">
                    <i class="bi bi-envelope-fill input-icon"></i>
                    <input type="email" class="input-field" placeholder="Seu email" />
                </div>

                <div class="input-container">
                    <i class="bi bi-lock-fill input-icon"></i>
                    <input type="password" class="input-field" placeholder="Sua senha" />
                    <i class="bi bi-eye-fill input-icon toggle-password"></i>
                </div>

                <div class="forgot-password-link">
                    <a href="">Esqueceu a senha?</a>
                </div>

                <div class="button-container">
                    <button class="submit-button">
                        Enviar
                    </button>
                </div>

                <div class="register-link">
                    <p>Ainda não tem cadastro? <a href="#">Cadastre-se e junte-se a nós!</a></p>
                </div>
            </form>

            <div class="group-3">
                <h1 class="p">Bem-vindo de Volta ao Conecta Paiol!</h1>
                <p class="text-wrapper-4">Faça login para acessar suas cestas, pedidos e muito mais.</p>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script src="{{ asset('js/public/login.js') }}"></script>
@endpush
@endsection