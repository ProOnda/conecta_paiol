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
    <section class="what-is-family-agriculture-section">
        <div class="what-is-family-agriculture-wrapper">
            <div class="section-header-content">
                <h2 class="section-title">O Que É e Por Que Importa</h2>
                <div class="line"></div>
            </div>

            <div class="main-content-area-family-agriculture">
                <div class="text-block-family-agriculture">
                    <p class="description-text">
                        A agricultura familiar é a espinha dorsal da nossa alimentação. Nela, pequenas propriedades rurais são cultivadas por famílias que dedicam sua força de trabalho, priorizando a sustentabilidade e a diversidade de alimentos.
                    </p>
                    <p class="description-text">
                        É um modelo que vai além da produção: ele preserva a cultura, os recursos naturais e garante a origem e qualidade dos alimentos que chegam à sua mesa. No Brasil, essa força é responsável por cerca de 70% dos alimentos que consumimos, sendo crucial para a segurança alimentar do país.
                    </p>
                </div>
            </div>
        </div>
        <div class="family-agriculture-banner">
            </div>
    </section>

    <section class="why-family-agriculture-vital-section">
        <div class="why-family-agriculture-vital-wrapper">
            <div class="section-header-content">
                <h2 class="section-title">Por que a Agricultura Familiar é Vital?</h2>
                <div class="line"></div>
            </div>

            <div class="vital-cards-container">
                <div class="vital-card">
                    <div class="vital-icon-circle">
                        <i class="bi-flower1"></i> </div>
                    <h3 class="vital-card-title">Produção de alimentos frescos e saudáveis.</h3>
                </div>

                <div class="vital-card">
                    <div class="vital-icon-circle">
                        <i class="bi bi-people"></i> </div>
                    <h3 class="vital-card-title">Geração de empregos nas comunidades rurais.</h3>
                </div>

                <div class="vital-card">
                    <div class="vital-icon-circle">
                        <i class="bi bi-recycle"></i> </div>
                    <h3 class="vital-card-title">Práticas agrícolas sustentáveis e ecológicas.</h3>
                </div>

                <div class="vital-card">
                    <div class="vital-icon-circle">
                        <i class="bi bi-shield-check"></i> </div>
                    <h3 class="vital-card-title">Contribuição para a segurança alimentar e nutricional.</h3>
                </div>

                <div class="vital-card">
                    <div class="vital-icon-circle">
                        <i class="bi bi-geo-alt"></i> </div>
                    <h3 class="vital-card-title">Acesso maior aos alimentos saudáveis.</h3>
                </div>

                <div class="vital-card">
                    <div class="vital-icon-circle">
                        <i class="bi bi-droplet-half"></i> </div>
                    <h3 class="vital-card-title">Redução do uso de agrotóxicos e conservação do solo.</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="challenges-solutions-section">
    <div class="challenges-solutions-wrapper">
        <div class="challenges-image-gallery-svg">
            <img src="{{ asset('img/public/desafios-solucoes-gallery.svg') }}" alt="Desafios e Soluções da Agricultura Familiar" class="combined-challenge-svg">
        </div>

        <div class="challenges-content-text">
            <div class="section-header-content text-align-left">
                <h2 class="section-title">Desafios e Soluções: O Papel do Conecta Paiol</h2>
                <div class="line align-left"></div>
            </div>
            <div class="main-text-block">
                <p class="description-text">
                    Apesar de sua vital importância, a agricultura familiar enfrenta desafios como acesso limitado a mercados, crédito e tecnologias, além de questões logísticas. Essas barreiras podem dificultar a competitividade e a subsistência.
                </p>
                <p class="description-text">
                    No Conecta Paiol de Saberes, atuamos como a ponte que conecta esses produtores ao mercado, facilitando a venda direta e justa. Através da tecnologia e de uma rede de apoio, ajudamos a superar essas dificuldades, garantindo que o valor e a qualidade do trabalho familiar cheguem a mais mesas.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection