{{-- resources/views/partials/header_page_cover.blade.php --}}
{{--
    Este partial é usado para headers de páginas internas (Sobre Nós, Explorar, etc.)
    Ele espera as seguintes variáveis:
    - $title: Título principal da página
    - $description: Descrição da página (opcional)
    - $image_path: Caminho da imagem para a seção hero
    - $alt_text: Texto alternativo para a imagem
    - $breadcrumb_items: Array de itens do breadcrumb, ex: [['label' => 'Inicio', 'route' => 'inicio'], ['label' => 'Sobre Nós', 'active' => true]]
--}}
<header class="main-header-home-page">
    <div class="main-header">
        <nav class="main-navbar">
            <div class="navbar-logo">
                <a href="{{ url('/') }}">
                    <img style="width: 120px; height: 120px;" src="{{ asset('img/shared/Logo.jpg') }}" alt="Logo Conecta Paiol de Saberes">
                </a>
            </div>

            <button class="navbar-toggler" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <div class="navbar-menu" id="navbar-menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('inicio') }}" class="nav-link">INICIO</a></li>
                    <li class="nav-item"><a href="{{ route('sobre-nos') }}" class="nav-link">SOBRE NÓS</a></li>
                    <li class="nav-item"><a href="{{ route('agricultores.index') }}" class="nav-link">AGRICULTORES</a></li>
                    <li class="nav-item"><a href="{{ route('nutricionistas.index') }}" class="nav-link">NUTRICIONISTAS</a></li>
                    <li class="nav-item"><a href="{{ route('explorar.index') }}" class="nav-link">EXPLORAR</a></li>
                    <li class="nav-item"><a href="{{ route('contato') }}" class="nav-link">CONTATO</a></li>
                    <li class="nav-item nav-item-login"><a href="{{ route('login') }}" class="nav-link">LOGIN</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="hero-background hero-about-explore"> {{-- A classe CSS genérica para este tipo de header --}}
        <div class="hero-conteudo">
            <div class="hero-content-wrapper">
                <div class="hero-text-content">
                    <h1 class="hero-title">{{ $title ?? 'Título Padrão' }}</h1>
                    @if (isset($description))
                        <p class="hero-description">{{ $description }}</p>
                    @endif
                    <div class="breadcrumb-nav">
                        @foreach ($breadcrumb_items as $item)
                            {{-- ALTERADO AQUI: De <a> para <span> --}}
                            <span class="breadcrumb-item @if(isset($item['active']) && $item['active']) breadcrumb-active @endif">
                                {{ $item['label'] }}
                            </span>
                            @if (!$loop->last)
                                <span class="breadcrumb-separator">></span>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="hero-image-content">
                    <div class="hero-image-bg"></div>
                    <img src="{{ asset($image_path ?? 'img/public/cesta-de-alimentos.svg') }}" alt="{{ $alt_text ?? 'Imagem Decorativa' }}" class="hero-image">
                    <div class="hero-image-overlay-circle-1"></div>
                    <div class="hero-image-overlay-circle-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-wave-bottom">
            <img src="{{ asset('img/shared/vetor-onda.svg') }}" alt="Onda decorativa">
    </div>
</header>