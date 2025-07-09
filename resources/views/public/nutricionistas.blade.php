@extends('layouts.public')

@push('styles')
    {{-- Seu main.css ou um CSS base já deve estar incluído no layouts.public --}}
    <link rel="stylesheet" href="{{ asset('css/public/nutricionistas.css') }}"> {{-- Estilos específicos para a página Nutricionistas --}}
@endpush

@section('title', 'Nutricionistas')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'O Papel do Nutricionista: Guia para uma Vida Saudável', // Título específico para Nutricionistas
        'description' => 'Descubra como esses profissionais transformam a saúde, a alimentação e as comunidades.', // Descrição específica para Nutricionistas
        'image_path' => 'img/public/image-header_cover.svg', // A mesma imagem genérica do header
        'alt_text' => 'Cesta de Alimentos Frescos e Saudáveis',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'],
            ['label' => 'Nutricionistas', 'active' => true, 'route' => 'nutricionistas.index'] // O 'route' é uma referência da rota, não o nome da view
        ]
    ])
@endsection

@section('content')

@endsection