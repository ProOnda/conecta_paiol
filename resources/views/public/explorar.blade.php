@extends('layouts.public')

@push('styles')
    {{-- Assume que seu main.css ou um CSS base já está incluído no layouts.public --}}
    <link rel="stylesheet" href="{{ asset('css/public/explorar.css') }}"> {{-- Estilos específicos para a página Explorar --}}
@endpush

@section('title', 'Explorar - Conecta Paiol de Saberes')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'Explore o Universo Conecta Paiol de Saberes', // Título específico da página Explorar
        'description' => 'Mergulhe no mundo da alimentação consciente e sustentável. Conheça os produtores que cultivam com carinho, descubra produtos autênticos e aprenda com nossos artigos e dicas sobre saúde e o campo.', // Descrição específica da página Explorar
        'image_path' => 'img/public/image-header_cover.svg', // A mesma imagem do header que você está usando no Sobre Nós, conforme as imagens fornecidas
        'alt_text' => 'Cesta de Alimentos Frescos e Saudáveis',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'], // O 'route' aqui é apenas para referência, lembrando que a tag será <span>
            ['label' => 'Explorar', 'active' => true, 'route' => 'explorar.index']
        ]
    ])
@endsection

@section('content')


@endsection