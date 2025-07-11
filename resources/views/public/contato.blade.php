@extends('layouts.public')

@push('styles')
    {{-- Seu main.css ou um CSS base já deve estar incluído no layouts.public --}}
    <link rel="stylesheet" href="{{ asset('css/public/contato.css') }}"> {{-- Estilos específicos para a página Contato --}}
@endpush

@section('title', 'Contato')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'Fale Conosco: Conecte-se com o Conecta Paiol', // Título específico para Contato
        'description' => 'Estamos aqui para ouvir suas dúvidas, sugestões e parcerias.', // Descrição específica para Contato
        'image_path' => 'img/public/image-header_cover.svg', // A mesma imagem genérica do header
        'alt_text' => 'Cesta de Alimentos Frescos e Saudáveis',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'],
            ['label' => 'Contato', 'active' => true, 'route' => 'contato'] // Ajustei a rota para 'contato'
        ]
    ])
@endsection

@section('content')
    <section class="contact-form-section">
        <div class="contact-form-wrapper">
            <form class="contact-form">
                <div class="form-group">
                    <div class="input-icon-wrapper">
                        <svg class="form-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 4a4 4 0 0 1 4 4 4 4 0 0 1-4 4 4 4 0 0 1-4-4 4 4 0 0 1 4-4zm0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4z"/>
                        </svg>
                        <input type="text" class="form-control" id="nome" placeholder="Seu nome" aria-label="Seu nome">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-icon-wrapper">
                        <svg class="form-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <input type="email" class="form-control" id="email" placeholder="Seu email" aria-label="Seu email">
                    </div>
                </div>

                <div class="form-group form-group-textarea">
                    <div class="input-icon-wrapper align-top">
                        <svg class="form-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4 18h16V6H4v12zm-2 0V6c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2zM4 9h16V7H4v2zm0 4h16v-2H4v2zm0 4h16v-2H4v2z"/>
                        </svg>
                        <textarea class="form-control" id="mensagem" placeholder="Sua mensagem" rows="5" aria-label="Sua mensagem"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
@endsection