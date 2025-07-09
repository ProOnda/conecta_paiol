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

@endsection