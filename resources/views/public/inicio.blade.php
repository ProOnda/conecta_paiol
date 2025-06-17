@extends('layouts.public')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/public/inicio.css') }}">
@endpush

@section('content')
    <section class="hero-background">
        <div class="hero-conteudo">
            <div class="hero-content-wrapper">
                <div class="hero-text-content">
                    <h1 class="hero-title">Saúde e Sustentabilidade: a união entre a Terra e o seu Bem-Estar</h1>
                    <p class="hero-description">Descubra como a agricultura familiar pode transformar a sua alimentação e saúde de forma natural e sustentável. Aqui, conectamos os alimentos frescos diretamente do campo com o conhecimento nutricional especializado, para que você viva de forma mais saudável e consciente.</p>
                    <div class="hero-buttons">
                        <a href="#" class="hero-button">Encontre Produtos Frescos</a>
                        <a href="#" class="hero-button">Descubra Nossos Agricultores</a>
                        <a href="#" class="hero-button">Conecte-se com Nutricionistas</a>
                    </div>
                </div>

                <div class="hero-image-content">
                    <div class="hero-image-bg"></div>
                    <img src="{{ asset('img/public/cesta-de-alimentos.svg') }}" alt="Cesta de alimentos frescos" class="hero-image">
                </div>
            </div>
        </div>

        <div class="scrolling-text-section">
            <div class="scrolling-text-container">
                <div class="scrolling-text-content">
                    <span class="scrolling-text-item">Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</span>
                    <span class="scrolling-text-item">Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</span>
                    <span class="scrolling-text-item">Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</span>
                    <span class="scrolling-text-item">Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</span>
                </div>
            </div>
        </div>

        <div class="hero-wave-bottom">
            <img src="{{ asset('img/shared/vetor-onda.svg') }}" alt="Onda decorativa">
        </div>
    </section>

    {{-- NOVA SEÇÃO: Promovendo Segurança Alimentar --}}
    <section class="about-us-section">
        <div class="about-us-content-wrapper">
            <div class="about-us-image-col">
                {{-- O SVG que você mencionou que baixou do Figma --}}
                {{-- Certifique-se de que o caminho está correto para onde você salvou o SVG --}}
                <img src="{{ asset('img/public/about-us-images.svg') }}" alt="Agricultura Familiar e Nutrição" class="about-us-svg">
            </div>
            <div class="about-us-text-col">
                <h2 class="about-us-title">Promovendo Segurança Alimentar e Sustentabilidade através da Agricultura Familiar</h2>
                <p class="about-us-description">Nosso objetivo é promover a segurança alimentar e o desenvolvimento sustentável por meio da valorização da agricultura familiar, oferecendo informações, recursos e serviços nutricionais que impactem positivamente a vida de comunidades em situação de vulnerabilidade. Buscamos conectar produtores locais e nutricionistas para garantir uma alimentação saudável e acessível, contribuindo para um futuro mais justo e equilibrado.</p>
                <a href="#" class="about-us-link">Sobre Nós</a> {{-- Adicione um link ou botão se houver --}}

                <div class="about-us-stats">
                    <div class="stat-item">
                        <span class="stat-number">1000 +</span>
                        <span class="stat-label">Agricultores Conectados</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000 +</span>
                        <span class="stat-label">Unidades Atendidas</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000 +</span>
                        <span class="stat-label">Nutricionistas Parceiros</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000 +</span>
                        <span class="stat-label">Satisfação na Conexão</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

        {{-- NOVA SEÇÃO: Sua Jornada para Conexões Saudáveis --}}
    <section class="journey-section">
        <div class="journey-content-wrapper">
            <h2 class="journey-title">Sua Jornada para Conexões Saudáveis</h2>

            <div class="journey-cards-container">
                {{-- Card 1: Para Compradores --}}
                <div class="journey-card">
                    <div class="card-icon">
                        <i class="bi bi-bag"></i> {{-- Ícone de sacola de compras --}}
                    </div>
                    <h3 class="card-title">Para Compradores</h3>
                    <p class="card-description">Acesse Alimentos Frescos e de Qualidade. Conecte-se diretamente com produtores locais e descubra o melhor da agricultura familiar.</p>
                    <a href="#" class="card-link">Ver Produtos</a>
                </div>

                {{-- Card 2: Para Agricultores --}}
                <div class="journey-card">
                    <div class="card-icon">
                        {{-- Vamos tentar o bi-tree-fill para dar uma "pegada" mais de cultivo, ou bi-box-seam (caixa de empacotar) --}}
                        {{-- O ícone bi-leaf (folha) é o mais comum, mas se você não gostou, vamos tentar outros --}}
                        {{-- bi-tree-fill seria uma árvore preenchida --}}
                        {{-- bi-basket2-fill para uma cesta de colheita --}}
                        <i class="bi bi-flower1"></i> {{-- Experimente este para agricultores --}}
                        {{-- OU: <i class="bi bi-basket2-fill"></i> --}}
                    </div>
                    <h3 class="card-title">Para Agricultores</h3>
                    <p class="card-description">Expanda Seu Mercado. Conecte-se com novos clientes e valorize sua produção orgânica e agroecológica.</p>
                    <a href="#" class="card-link">Cadastre-se como Agricultor</a>
                </div>

                {{-- Card 3: Para Nutricionistas --}}
                <div class="journey-card">
                    <div class="card-icon">
                        <i class="bi bi-file-earmark-text"></i> {{-- Ícone de documento/prancheta --}}
                    </div>
                    <h3 class="card-title">Para Nutricionistas</h3>
                    <p class="card-description">Compartilhe Seu Conhecimento. Inspire uma alimentação consciente e conecte-se com quem busca saúde e bem-estar.</p>
                    <a href="#" class="card-link">Cadastre-se como Nutricionista</a>
                </div>
            </div>
        </div>
    </section>

    {{-- NOVA SEÇÃO: Explore o Melhor da Nossa Rede --}}
    <section class="explore-section">
        <div class="explore-content-wrapper">
            {{-- REMOVA o div com estilos inline e use este h2 e p --}}
            <h2 class="explore-title-primary">Explore o Melhor da Nossa Rede</h2>
            <div class="line"></div>
            <div class="explore-cards-container">
                {{-- Seus cards de produtos/agricultores viriam aqui --}}
            </div>
        </div>
    </section>

    <section class="stories-section">
        <div class="stories-content-wrapper">
            <h2 class="stories-title">Histórias que Inspiram</h2>

            <div class="stories-cards-container">
                <div class="story-card">
                    <div class="story-profile">
                        <img src="{{ asset('img/shared/maria-profile.jpg') }}" alt="Foto de Perfil da Maria" class="profile-image">
                        <span class="profile-name">Maria</span>
                    </div>
                    <p class="story-description">Graças ao Conecta Paiol, consegui escoar toda a minha produção orgânica e o sítio da minha família voltou a prosperar. A plataforma abriu portas que eu nem imaginava que existiam.</p>
                </div>

                <div class="story-card">
                    <div class="story-profile">
                        <img src="{{ asset('img/shared/elisangela-profile.jpg') }}" alt="Foto de Perfil da Dra. Elisângela" class="profile-image">
                        <span class="profile-name">Dra. Elisângela</span>
                    </div>
                    <p class="story-description">Compartilhar meus artigos e dicas sobre nutrição agroecológica no Conecta Paiol me conectou a um público muito maior. Pude ver o impacto do meu trabalho na vida de muitas pessoas que buscam uma alimentação mais consciente.</p>
                </div>

                <div class="story-card">
                    <div class="story-profile">
                        <img src="{{ asset('img/shared/carlos-profile.jpg') }}" alt="Foto de Perfil do Chef Carlos" class="profile-image">
                        <span class="profile-name">Chef Carlos</span>
                    </div>
                    <p class="story-description">Eu buscava fornecedores de orgânicos com transparência e qualidade. O Conecta Paiol simplificou essa busca, permitindo que eu construísse parcerias diretas com agricultores familiares que realmente valorizam o que fazem.</p>
                </div>
            </div>

            <div class="pagination-dots">
                <div class="dot active"></div>
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <section class="pillars-section">
        <h2 class="pillars-title">Nossos Pilares</h2>
        <div class="line"></div> <div class="pillars-cards-container">
            <div class="pillar-card">
                <div class="pillar-icon">
                    <i class="bi bi-apple"></i> 
                </div>
                <h3 class="pillar-card-title">Alimentos mais frescos e saudáveis</h3>
                <p class="pillar-card-description">Produtos da agricultura familiar percorrem distâncias mais curtas até chegar à mesa, garantindo maior frescor e valor nutricional em cada refeição.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <i class="bi bi-recycle"></i> 
                </div>
                <h3 class="pillar-card-title">Sustentabilidade em ação</h3>
                <p class="pillar-card-description">Agricultura familiar preserva o meio ambiente ao usar práticas sustentáveis e respeitar a biodiversidade, promovendo um consumo consciente.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <i class="bi bi-people-fill"></i> 
                </div>
                <h3 class="pillar-card-title">Impacto social direto</h3>
                <p class="pillar-card-description">Ao apoiar agricultores familiares, você fortalece a economia local e ajuda comunidades rurais a se desenvolverem, promovendo uma cadeia alimentar mais justa e solidária.</p>
            </div>
        </div>

        <div class="pillars-background-svg"></div>
    </section>

@endsection