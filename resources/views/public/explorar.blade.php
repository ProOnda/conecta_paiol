@extends('layouts.public')

@push('styles')
    {{-- Assume que seu main.css ou um CSS base já está incluído no layouts.public --}}
    <link rel="stylesheet" href="{{ asset('css/public/explorar.css') }}"> {{-- Estilos específicos para a página Explorar --}}
@endpush

@section('title', 'Explorar')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'Explore o Universo Conecta Paiol de Saberes',
        'description' => 'Mergulhe no mundo da alimentação consciente e sustentável. Conheça os produtores que cultivam com carinho, descubra produtos autênticos e aprenda com nossos artigos e dicas sobre saúde e o campo.',
        'image_path' => 'img/public/image-header_cover.svg', // Usando a imagem da cesta, mais consistente com o contexto explorar
        'alt_text' => 'Cesta de Alimentos Frescos e Saudáveis',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'],
            ['label' => 'Explorar', 'active' => true, 'route' => 'explorar.index']
        ]
    ])
@endsection

@section('content')
    <section class="explore-content-section">
        <div class="explore-content-wrapper">
            <div class="search-and-categories-container">
                <div class="search-bar-group">
                    <div class="search-input-wrapper">
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                        <input type="text" class="search-input" id="searchExplore" placeholder="Pesquise produtos, fazendas ou artigos e dicas" aria-label="Pesquisar">
                    </div>
                    <button type="button" class="filter-button" aria-label="Filtrar resultados">
                        <svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
                        </svg>
                    </button>
                </div>

                <div class="category-buttons-group">
                    <button type="button" class="category-button active" data-category="gerais">Gerais</button>
                    <button type="button" class="category-button" data-category="fazendas">Fazendas</button>
                    <button type="button" class="category-button" data-category="produtos">Produtos</button>
                    <button type="button" class="category-button" data-category="artigos-dicas">Artigos e Dicas</button>
                </div>
            </div>

            <div id="exploreResults" class="explore-results-area">
                <p>Os resultados da sua pesquisa ou categoria selecionada aparecerão aqui.</p>
            </div>
        </div>
    </section>

    {{-- O script deve ser incluído no final do body, mas dentro da section 'content' ou 'scripts'
         se seu layout.public tem uma section para scripts no final do body. --}}
    @push('scripts')
        <script src="{{ asset('js/public/explorar.js') }}"></script>
    @endpush
@endsection