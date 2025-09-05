@extends('layouts.public') {{-- Estende o layout base do seu projeto --}}

@push('styles')
    {{-- Estilos específicos para a página de Cadastro --}}
    <link rel="stylesheet" href="{{ asset('css/public/cadastro.css') }}">
@endpush

@push('scripts')
    {{-- Script específico para a lógica de cadastro --}}
    <script src="{{ asset('js/public/cadastro.js') }}" defer></script>
@endpush

@section('title', 'Cadastre-se') {{-- Título da página --}}

@section('content')
    <div class="cadastro-container">
        <div class="circulo">
            <i class="bi bi-person"></i>
        </div>
        <form class="contact-form" action="{{ route('cadastro') }}" method="post">
            @csrf

            <div class="input-group">
                <i class="bi bi-envelope"></i>
                <input type="email" id="email" name="email" required placeholder="E-mail" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <i class="bi bi-lock"></i>
                <input type="password" id="password" name="password" required placeholder="Senha">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <i class="bi bi-lock"></i>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirme a Senha">
            </div>

            <div class="input-group select-group">
                <label for="role">Tipo de Cadastro:</label>
                <div class="select-wrapper"> {{-- NOVO: Wrapper para o select e o ícone --}}
                    <select id="role" name="role" onchange="showFields()" required>
                        <option value="">Escolha...</option>
                        <option value="agricultor" {{ old('role') == 'agricultor' ? 'selected' : '' }}>Agricultor</option>
                        <option value="nutricionista" {{ old('role') == 'nutricionista' ? 'selected' : '' }}>Nutricionista</option>
                    </select>
                    <i class="bi bi-chevron-down select-arrow"></i> {{-- NOVO: Ícone da setinha do Bootstrap --}}
                </div>
                @error('role')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div id="agricultor-fields" class="extra-fields">
                <div class="input-group">
                    <input type="text" name="nome_agricultor" placeholder="Nome completo" value="{{ old('nome_agricultor') }}">
                </div>
                <div class="input-group">
                    <input type="text" name="fazenda_agricultor" placeholder="Nome da fazenda/propriedade" value="{{ old('fazenda_agricultor') }}">
                </div>
                <div class="input-group">
                    <textarea name="produtos_agricultor" placeholder="Tipos de produtos oferecidos">{{ old('produtos_agricultor') }}</textarea>
                </div>
                <div class="input-group">
                    <input type="text" name="localizacao_agricultor" placeholder="Localização da propriedade" value="{{ old('localizacao_agricultor') }}">
                </div>
            </div>

            <div id="nutricionista-fields" class="extra-fields">
                <div class="input-group">
                    <input type="text" name="nome_nutricionista" placeholder="Nome completo" value="{{ old('nome_nutricionista') }}">
                </div>
                <div class="input-group">
                    <input type="text" name="crn_nutricionista" placeholder="CRN (Conselho Regional de Nutricionistas)" value="{{ old('crn_nutricionista') }}">
                </div>
                <div class="input-group">
                    <textarea name="especializacao_nutricionista" placeholder="Áreas de especialização">{{ old('especializacao_nutricionista') }}</textarea>
                </div>
                <div class="input-group">
                    <input type="text" name="disponibilidade_nutricionista" placeholder="Disponibilidade para consultas" value="{{ old('disponibilidade_nutricionista') }}">
                </div>
            </div>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="login-link">
            <p>Já possui conta?</p>
            <a href="{{ route('login') }}">Faça login</a>
        </div>
    </div>
@endsection