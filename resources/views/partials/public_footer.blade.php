<footer class="main-footer">
    <div class="footer-wave-top">
        <img src="{{ asset('img/shared/vetor-onda.svg') }}" alt="Onda decorativa">
    </div>

    <div class="footer-content-wrapper">
        <div class="footer-left-col">
            <nav class="footer-nav">
                <ul>
                    <li><a href="{{ route('inicio') }}">INICIO</a></li>
                    <li><a href="{{ route('sobre-nos') }}">SOBRE NÓS</a></li>
                    <li><a href="{{ route('agricultores.index') }}">AGRICULTORES</a></li>
                    <li><a href="{{ route('nutricionistas.index') }}">NUTRICIONISTAS</a></li>
                    <li><a href="{{ route('explorar.index') }}">EXPLORAR</a></li>
                    <li><a href="{{ route('contato') }}">CONTATO</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </nav>
        </div>

        <div class="footer-right-col">
            <div class="footer-brand-logo">
                <img src="{{ asset('img/shared/logo.jpg') }}" alt="Logo Conecta Paiol de Saberes">
            </div>
            <p class="footer-description">
                Promovendo um futuro mais saudável e sustentável, conectando agricultores familiares, nutricionistas e consumidores. Junte-se a nós nesta missão de transformar a alimentação.
            </p>
            <div class="footer-social-icons">
                <a href="#" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom-bar">
        <p class="footer-copyright">© | Conecta Paiol de Saberes</p>
    </div>
</footer>