{{-- resources/views/partials/public_header.blade.php --}}
<header class="main-header">
<nav class="main-navbar">
    <div class="navbar-logo">
        <a href="{{ url('/') }}">
            {{-- Usar a imagem do logo que você já tem --}}
            <img src="{{ asset('img/shared/Logo.jpg') }}" alt="Logo Conecta Paiol de Saberes">
        </a>
    </div>

    <button class="navbar-toggler" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i> {{-- Ícone de hambúrguer do Bootstrap Icons --}}
    </button>

    <div class="navbar-menu" id="navbar-menu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('/inicio') }}" class="nav-link">INICIO</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/sobre-nos') }}" class="nav-link">SOBRE NÓS</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/produtos') }}" class="nav-link">PRODUTOS</a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('/agricultores') }}" class="nav-link dropdown-toggle" id="agricultoresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    AGRICULTORES <i class="bi bi-chevron-down"></i> {{-- Ícone de seta para baixo --}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="agricultoresDropdown">
                    <li><a class="dropdown-item" href="{{ url('/agricultores/cadastro') }}">Cadastre-se como Agricultor</a></li>
                    <li><a class="dropdown-item" href="{{ url('/agricultores/informacoes') }}">Informações para Agricultores</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ url('/nutricionistas') }}" class="nav-link dropdown-toggle" id="nutricionistasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    NUTRICIONISTAS <i class="bi bi-chevron-down"></i> {{-- Ícone de seta para baixo --}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="nutricionistasDropdown">
                    <li><a class="dropdown-item" href="{{ url('/nutricionistas/cadastro') }}">Cadastre-se como Nutricionista</a></li>
                    <li><a class="dropdown-item" href="{{ url('/nutricionistas/blog') }}">Blog Nutrição</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ url('/contato') }}" class="nav-link">CONTATO</a>
            </li>
            <li class="nav-item nav-item-login"> {{-- Classe para estilizar o botão de Login se for diferente --}}
                <a href="{{ url('/login') }}" class="nav-link">LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
</header>