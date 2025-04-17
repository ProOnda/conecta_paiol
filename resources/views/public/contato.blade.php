<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/public/contato.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Bebas+Neue&family=BioRhyme:wght@200..800&family=Cookie&family=Jura:wght@300..700&family=Orbitron:wght@400..900&family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Entre em contato</title>
</head>
<body>
    <header>
        <nav class="menu">
            <a href="{{ route('public.inicio') }}" class="logo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Logo" class="logo-img">
            </a>
            <ul class="menu-links">
                <li><a href="{{ route('public.inicio') }}">Inicio</a></li>
                <li><a href="{{ route('public.quem_somos') }}">Quem Somos</a></li>
                <li><a href="{{ route('public.agricultura') }}">Agricultura Familiar</a></li>
                <li><a href="{{ route('public.nutricao') }}">Nutrição</a></li>
                <li><a href="{{ route('public.contato') }}">Contato</a></li>
                <li><a href="{{ route('public.login') }}" target="_blank">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contato-section">
            <div class="contato-container">
                <h2>Entre em contato com a gente e descubra como podemos ajudar você a se alimentar melhor e apoiar a agricultura familiar!</h2>
                <form class="formulario-contato">
                    <input type="text" placeholder="Seu nome" required>
                    <input type="email" placeholder="Seu email" required>
                    <textarea placeholder="Sua mensagem" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
                <div class="imagem-contato">
                    <img src="{{ asset('img/vegetables-3386212_1280.jpg') }}" alt="Imagem de vegetais">
                </div>
        </section>
    </main>


    <footer class="final">
        <div class="final-conteudo">
            <div class="menu-rodape">
                <ul>
                    <li><a href="{{ route('public.inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('public.quem_somos') }}">Quem Somos</a></li>
                    <li><a href="{{ route('public.agricultura') }}">Agricultura Familiar</a></li>
                    <li><a href="{{ route('public.nutricao') }}">Nutrição</a></li>
                    <li><a href="{{ route('public.contato') }}">Contato</a></li>
                    <li><a href="{{ route('public.login') }}" target="_blank">Login</a></li>
                </ul>
            </div>
            <div class="logotipo">
                <img src="{{ asset('img/Logo.jpg') }}" alt="Logotipo" class="logotipo-img">
                <p>Promovendo um futuro mais saudável e sustentável, conectando agricultores familiares, nutricionistas e consumidores. Junte-se a nós nessa missão de transformar a alimentação.</p>
                <div class="social-rodape">
                    <div class="social-icons">
                        <i class="bi bi-whatsapp"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>
        </div>
        <p class="direitos">© | Conecta Paiol de Saberes</p>
    </footer>
</body>
</html>