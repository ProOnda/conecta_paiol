<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link rel="stylesheet" href="{{ asset('css/public/quem-somos.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Bebas+Neue&family=BioRhyme:wght@200..800&family=Cookie&family=Jura:wght@300..700&family=Orbitron:wght@400..900&family=Permanent+Marker&display=swap" rel="stylesheet">
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
        <section class="quem-somos-section">
            <div class="quem-somos-container">
                <h1>Quem Somos</h1>
                <p>Somos uma plataforma dedicada a conectar você com o mundo da agricultura familiar e da nutrição consciente. Acreditamos no poder dos alimentos frescos, cultivados com cuidado e respeito pela terra, e no conhecimento dos nutricionistas para guiar você em uma jornada de bem-estar e saúde.</p>

                <h2>Nossa Missão</h2>
                <p>Nossa missão é promover um futuro mais saudável e sustentável, facilitando o acesso a alimentos nutritivos da agricultura familiar e disseminando informações valiosas sobre nutrição. Queremos empoderar consumidores, apoiar agricultores locais e valorizar o papel dos nutricionistas na construção de hábitos alimentares saudáveis.</p>

                <h2>Nossa Visão</h2>
                <p>Nossa visão é ser a principal plataforma de conexão entre a agricultura familiar, os profissionais de nutrição e os consumidores, reconhecida por sua contribuição para uma sociedade mais consciente, saudável e sustentável.</p>

                <h2>Nossos Valores</h2>
                <ul>
                    <li><strong>Sustentabilidade:</strong> Promovemos práticas agrícolas que respeitam o meio ambiente e a biodiversidade.</li>
                    <li><strong>Saúde:</strong> Valorizamos a nutrição como pilar fundamental para o bem-estar físico e mental.</li>
                    <li><strong>Conexão:</strong> Criamos pontes entre produtores, profissionais e consumidores.</li>
                    <li><strong>Valorização Local:</strong> Acreditamos no fortalecimento da agricultura familiar e das economias locais.</li>
                    <li><strong>Transparência:</strong> Buscamos oferecer informações claras e confiáveis sobre a origem dos alimentos e as práticas nutricionais.</li>
                </ul>

                <h2>Junte-se a Nós!</h2>
                <p>Faça parte dessa comunidade que valoriza a saúde, a sustentabilidade e o sabor dos alimentos verdadeiros. Explore nossa plataforma, descubra os produtos da agricultura familiar, encontre nutricionistas qualificados e embarque em uma jornada de alimentação consciente e bem-estar.</p>
            </div>
            <div class="imagem-quem-somos">
                <img src="{{ asset('img/colheita-feliz.jpg') }}" alt="Agricultores felizes com a colheita">
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