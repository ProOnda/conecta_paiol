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
    <section class="what-is-connecta-section">
        <div class="text-image">
            <div class="image content">
                <img src="{{ asset('img/public/tomates.svg') }}" alt="">
            </div>
            <div class="container what-is-connecta-wrapper">
                <div class="section-header-content">
                    <h2 class="section-title text-golden-dark">O que é o Conecta Paiol de Saberes</h2>
                    <div class="line"></div>
                </div>

                <div class="main-content-area">

                    <div class="text-block">
                        <p class="description-text">O Conecta Paiol de Saberes é uma plataforma inovadora dedicada a fortalecer o sistema alimentar, conectando diretamente agricultores familiares e cooperativas a Unidades de Alimentação e Nutrição (UANs), restaurantes e outros compradores. Nosso principal objetivo é promover a segurança alimentar e nutricional, garantindo o acesso a alimentos orgânicos, agroecológicos e de alta qualidade, com foco na valorização da agricultura familiar e no fortalecimento das economias locais.</p>
                        <p class="description-text">Acreditamos que a colaboração e a tecnologia são chaves para transformar o acesso aos alimentos, reduzindo desigualdades e promovendo a justiça social. Comprometidos com a saúde das pessoas e o futuro do planeta, construímos uma plataforma simples e transparente, onde pequenos produtores ganham visibilidade e acesso a mercados, e compradores adquirem alimentos frescos com praticidade e economia.</p>
                    </div>
                </div>
            </div>
            <div class="image content">
            <img src="{{ asset('img/public/alface.svg') }}" alt="">
        </div>
        </div>

            {{-- Cards de Missão, Visão, Valores --}}
            <div class="cards-container">
                <div class="info-card">
                    <div class="card-icon-bg">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3 class="card-title text-primary-green">Missão</h3>
                    <p class="card-description">Facilitar a conexão entre agricultores familiares e setores de alimentação para promover segurança alimentar com produtos orgânicos e fortalecer a sustentabilidade local.</p>
                </div>

                <div class="info-card">
                    <div class="card-icon-bg">
                        <i class="bi bi-globe"></i> {{-- Ícone do Bootstrap para Globo (Visão) --}}
                    </div>
                    <h3 class="card-title text-primary-green">Visão</h3>
                    <p class="card-description">Tornar-se a principal plataforma que transforma o sistema alimentar brasileiro, promovendo justiça social, ambiental e acesso a alimentos de qualidade.</p>
                </div>

                <div class="info-card">
                    <div class="card-icon-bg">
                        <i class="bi bi-award"></i>
                    </div>
                    <h3 class="card-title text-primary-green">Valores</h3>
                    <p class="card-description">Sustentabilidade; Justiça Social; Transparência; Saúde e Bem-estar; Inovação; Respeito à Diversidade.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Nova Seção: Do Campo à Mesa --}}
    <section class="farm-to-table-banner">
        <div class="banner-overlay"></div>
        <h2 class="banner-title">Do Campo à Mesa: A Visão que Criou o Conecta Paiol</h2>
    </section>

    {{-- Nova Seção: Nossa História --}}
    <section class="our-history-section">
        <div class="container our-history-wrapper">
            <div class="history-content">
                <p class="history-text">A ideia do Conecta Paiol de Saberes não nasceu em um plano de negócios, mas da realidade que testemunhamos. Vimos de perto a luta de inúmeros agricultores familiares: a dedicação em produzir alimentos de qualidade que, muitas vezes, não encontravam um caminho justo para o mercado. Era frustrante ver tanto esforço e potencial serem subaproveitados.</p>
                <p class="history-text">Ao mesmo tempo, percebemos a carência de cozinhas profissionais, restaurantes e UANs que buscavam ingredientes frescos, orgânicos e com origem transparente. A cadeia de suprimentos tradicional era ineficiente e opaca para atender a essa demanda por qualidade e rastreabilidade. Havia uma clara desconexão entre quem produz com propósito e quem busca com intenção.</p>
                <p class="history-text">Dessa lacuna, surgiu a visão do Conecta Paiol: criar uma ponte digital direta. Nossa missão é simplificar o acesso para ambos os lados: apoiar os agricultores com tecnologia e oferecer aos compradores uma fonte confiável de alimentos, com garantia de qualidade e rastreabilidade.</p>
                <p class="history-text">Nossa experiência inicial confirmou que era possível. Não é apenas sobre comércio; é sobre valorizar o trabalho do campo, promover a saúde e o bem-estar nas cidades, e construir um sistema alimentar que seja mais justo, transparente e sustentável para todos. Esta é a nossa jornada, impulsionada pela crença no poder da conexão.</p>
            </div>
        </div>
    </section>

        {{-- Nova Seção: Nosso Impacto --}}
    <section class="our-impact-section">
        <div class="container our-impact-wrapper">
            <h2 class="section-title text-golden-dark">Nosso Impacto: Construindo um Futuro Mais Justo</h2>
            <div class="line"></div> {{-- Linha abaixo do título --}}

            <div class="impact-cards-container">
                {{-- Card 1: Fortalecimento da Agricultura Familiar --}}
                <div class="impact-card">
                    <div class="impact-icon-circle">
                        <i class="bi bi-house-door"></i> {{-- Ícone de casa (representando fazenda/família) --}}
                    </div>
                    <h3 class="impact-card-title text-primary-green">Fortalecimento da Agricultura Familiar</h3>
                    <p class="impact-card-description">Garantimos renda justa e autonomia para pequenos produtores, conectando-os diretamente a um mercado que valoriza seus produtos e práticas sustentáveis. Isso combate o êxodo rural e impulsiona a economia local.</p>
                </div>

                {{-- Card 2: Promoção da Saúde e Segurança Alimentar --}}
                <div class="impact-card">
                    <div class="impact-icon-circle">
                        <i class="bi bi-apple"></i> {{-- Ícone de maçã (representando saúde/alimento) --}}
                    </div>
                    <h3 class="impact-card-title text-primary-green">Promoção da Saúde e Segurança Alimentar</h3>
                    <p class="impact-card-description">Facilitamos o acesso a alimentos orgânicos, agroecológicos e de alta qualidade para UANs, restaurantes e consumidores. Contribuímos diretamente para uma alimentação mais saudável, segura e transparente.</p>
                </div>

                {{-- Card 3: Fomento à Sustentabilidade e Economia Consciente --}}
                <div class="impact-card">
                    <div class="impact-icon-circle">
                        <i class="bi bi-recycle"></i> {{-- Ícone de reciclagem (representando sustentabilidade) --}}
                    </div>
                    <h3 class="impact-card-title text-primary-green">Fomento à Sustentabilidade e Economia Consciente</h3>
                    <p class="impact-card-description">Incentivamos métodos de cultivo que respeitam o meio ambiente e encurtamos a cadeia de suprimentos, reduzindo desperdícios e a pegada de carbono. Criamos um ciclo virtuoso de consumo e produção conscientes.</p>
                </div>
            </div>
        </div>
    </section>
@endsection