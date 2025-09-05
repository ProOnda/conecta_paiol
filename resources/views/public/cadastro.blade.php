@extends('layouts.auth')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/public/cadastro.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('title', 'Cadastre-se')

@section('content')
<section class="CADASTRO">
    <div class="overlap-wrapper">
        <div class="overlap">
            {{-- Detalhe de design verde diagonal --}}
            <img class="rectangle" src="{{ asset('img/public/diagonal-green-shape.svg') }}" alt="Detalhe de Design Verde Diagonal" />
            {{-- Logo do projeto --}}
            <img class="favicon" src="{{ asset('img/shared/Logo.jpg') }}" alt="Logo Conecta Paiol de Saberes" />

            {{-- Conteúdo de texto à esquerda (lado verde) --}}
            {{-- Este é o group-3 que estava à esquerda no login. Agora ele está à direita --}}
            <div class="group-3 login-text-section"> {{-- Adicionei 'login-text-section' para um possível estilo de posicionamento --}}
                <h1 class="p">Junte-se à Nossa Rede Conectada!</h1>
                <p class="text-wrapper-4">Crie sua conta e descubra um mundo de alimentos frescos e conhecimento.</p>
            </div>

            {{-- Formulário de Cadastro --}}
            {{-- Este é o 'group' que estava à direita no login. Agora ele está à esquerda --}}
            <form class="group cadastro-form-section" method="POST" action="{{ route('cadastro') }}">
                @csrf 

                {{-- Campo de E-mail --}}
                <div class="input-container">
                    <i class="bi bi-envelope-fill input-icon"></i>
                    <input type="email" class="input-field" name="email" placeholder="Seu email" required />
                </div>

                {{-- Campo de Senha --}}
                <div class="input-container">
                    <i class="bi bi-lock-fill input-icon"></i>
                    <input type="password" class="input-field" name="password" placeholder="Sua senha" required />
                    <i class="bi bi-eye-fill input-icon toggle-password"></i>
                </div>

                {{-- Campo de Confirmação de Senha --}}
                <div class="input-container">
                    <i class="bi bi-lock-fill input-icon"></i>
                    <input type="password" class="input-field" name="password_confirmation" placeholder="Confirme a senha" required />
                    <i class="bi bi-eye-fill input-icon toggle-password"></i>
                </div>

                {{-- Botão de Submissão --}}
                <div class="button-container">
                    <button type="submit" class="submit-button">
                        Próximo
                    </button>
                </div>

                {{-- Link para a página de Login --}}
                <div class="register-link login-link-cadastro"> {{-- Mantive 'register-link' mas adicionei um para especificidade --}}
                    <p>Já possui conta? <a href="{{ route('login') }}">Faça login</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    {{-- Script para o "olhinho" da senha --}}
    <script src="{{ asset('js/public/login.js') }}"></script> {{-- Reutilizamos o mesmo script do login --}}
@endpush