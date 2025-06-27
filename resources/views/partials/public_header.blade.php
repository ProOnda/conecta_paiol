{{-- resources/views/partials/public_header.blade.php --}}
<header class="main-header">
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
</header>