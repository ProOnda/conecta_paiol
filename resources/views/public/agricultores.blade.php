@extends('layouts.public')

@push('styles')
    {{-- Seu main.css ou um CSS base já deve estar incluído no layouts.public --}}
    <link rel="stylesheet" href="{{ asset('css/public/agricultores.css') }}"> {{-- Estilos específicos para a página Agricultores --}}
@endpush

@section('title', 'Agricultores')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'O Coração do Campo: A Agricultura Familiar no Brasil', // Título específico para Agricultores
        'description' => 'Conheça a força que alimenta o país, preserva a natureza e constrói comunidades.', // Descrição específica para Agricultores
        'image_path' => 'img/public/image-header_cover.svg', // A mesma imagem genérica do header
        'alt_text' => 'Cesta de Alimentos Frescos da Agricultura Familiar',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'],
            ['label' => 'Agricultores', 'active' => true, 'route' => 'agricultores.index']
        ]
    ])
@endsection

@section('content')


@endsection