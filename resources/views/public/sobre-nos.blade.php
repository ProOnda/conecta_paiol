@extends('layouts.public')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/public/sobre-nos.css') }}"> {{-- Estilos específicos da página --}}
@endpush

@section('title', 'Sobre Nós')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'Conecta Paiol de Saberes: Nossa História, Nossa Missão',
        'description' => 'Conectando o campo e a cidade para um futuro mais saudável e sustentável.',
        'image_path' => 'img/public/image-header_cover.svg', // Caminho da imagem específica para Sobre Nós
        'alt_text' => 'Equipe Conecta Paiol de Saberes',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'],
            ['label' => 'Sobre Nós', 'active' => true, 'route' => 'sobre-nos']
        ]
    ])
@endsection

@section('content')

@endsection