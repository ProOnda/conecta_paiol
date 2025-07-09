<header class="main-header-home-page">
    <div class="main-header">
        <nav class="main-navbar">
            <div class="navbar-logo">
                <a href="{{ url('/') }}">
                    {{-- O design tem um logo de 120x120px. Ajuste o src. --}}
                    <img style="width: 120px; height: 120px;" src="{{ asset('img/shared/Logo.jpg') }}" alt="Logo Conecta Paiol de Saberes">
                </a>
            </div>

            {{-- O botão de hamburguer ainda é necessário para mobile, mas será ocultado por CSS em desktop. --}}
            <button class="navbar-toggler" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i> {{-- Ícone de hambúrguer do Bootstrap Icons --}}
            </button>

            {{-- A div .navbar-menu conterá os links de navegação. --}}
            <div class="navbar-menu" id="navbar-menu">
                <ul class="navbar-nav">
                    {{-- Ordem dos itens conforme o design da imagem:
                        INICIO - SOBRE NÓS - AGRICULTORES - NUTRICIONISTAS - EXPLORAR - CONTATO - LOGIN
                    --}}
                    <li class="nav-item">
                        <a href="{{ route('inicio') }}" class="nav-link">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sobre-nos') }}" class="nav-link">SOBRE NÓS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('agricultores.index') }}" class="nav-link">AGRICULTORES</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('nutricionistas.index') }}" class="nav-link">NUTRICIONISTAS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('explorar.index') }}" class="nav-link">EXPLORAR</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contato') }}" class="nav-link">CONTATO</a>
                    </li>
                    <li class="nav-item nav-item-login">
                        <a href="{{ route('login') }}" class="nav-link">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="hero-background">
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
    </div>
</header>