<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="{{ asset('css/public/inicio.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Bebas+Neue&family=BioRhyme:wght@200..800&family=Cookie&family=Jura:wght@300..700&family=Orbitron:wght@400..900&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="{{ asset('js/public/inicio.js') }}" defer></script>
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
    <section class="inicio">
        <div class="conteudo">
            <h1>Saúde e Sustentabilidade: a união entre a Terra e o seu Bem-Estar</h1>
            <p>Descubra como a agricultura familiar pode transformar a sua alimentação e saúde de forma natural e sustentável. Aqui, conectamos os alimentos frescos diretamente do campo com o conhecimento nutricional especializado, para que você viva de forma mais saudável e consciente.</p>
        </div>
        <div class="imagem-container">
            <div class="fundo-circular"></div> <img src="{{ asset('img/inicio-alimentos.png') }}" alt="Agricultura Familiar">
        </div>
    </section>

    <section class="frase">
        <p>Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</p>
        <p>Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</p>
        <p>Cultivando saúde do campo à mesa, para um futuro mais sustentável e equilibrado.</p>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#363a24" fill-opacity="1" d="M0,288L40,250.7C80,213,160,139,240,106.7C320,75,400,85,480,112C560,139,640,181,720,218.7C800,256,880,288,960,277.3C1040,267,1120,213,1200,192C1280,171,1360,181,1400,186.7L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
      </svg>

    <section class="objetivo">
        <div class="margem">
            <h2>Promovendo Segurança Alimentar e Sustentabilidade através da Agricultura Familiar</h2>
            <div class="flex">
                <div class="conteudo">
                    <p>Nosso objetivo é promover a segurança alimentar e o desenvolvimento sustentável por meio da valorização da agricultura familiar, oferecendo informações, recursos e serviços nutricionais que impactem positivamente a vida de comunidades em situação de vulnerabilidade. Buscamos conectar produtores locais e nutricionistas para garantir uma alimentação saudável e acessível, contribuindo para um futuro mais justo e equilibrado.</p>

                    <a href="{{ route('public.quem_somos') }}">
                        <div class="flex">
                            <p>Quem Somos</p>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <img src="{{ asset('img/soil-8080788_1280.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section class="carrossel">
        <div class="margem">
            <div class="flex" id="carousel-content">
                <div class="conteudo">
                    <h3>Agricultura Familiar</h3>
                    <p>A agricultura familiar é um modelo de produção que alia sustentabilidade e responsabilidade social. Pequenos produtores, com o apoio de suas famílias, dedicam-se a cultivar alimentos frescos e nutritivos. Esse tipo de agricultura não só fortalece a economia local, como também promove a preservação do meio ambiente e a valorização das comunidades rurais.</p>
                    <a href="{{ route('public.agricultura') }}">
                        <div class="flex">
                            <p>Agricultura Familiar</p>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <img src="{{ asset('img/farmer-8294716_1280.jpg') }}" alt="">
            </div>

            <div class="flex" id="carousel-content" style="display:none;">
                <div class="conteudo">
                    <h3>Nutrição</h3>
                    <p>A nutrição é a base para uma vida longa e saudável. Ter uma alimentação equilibrada não só fortalece o sistema imunológico, mas também melhora o humor, a energia e a saúde geral do corpo. Entender a importância da nutrição e fazer escolhas alimentares conscientes são passos importantes para o bem-estar físico e mental.</p>
                    <a href="{{ route('public.nutricao') }}">
                        <div class="flex">
                            <p>Nutrição</p>
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <img src="{{ asset('img/nutricionaista.jpg') }}" alt="">
            </div>

            <div class="indicador">
                <div class="flex">
                    <i class="bi bi-circle-fill" id="indicator1" onclick="showCard(0)"></i>
                    <i class="bi bi-circle-fill" id="indicator2" onclick="showCard(1)"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="estatistica-total">
        <img src="{{ asset('img/fruit-700007_1920.jpg') }}" alt="">
        <div class="estatistica">
            <div class="margem">
                <div class="flex">
                    <p>+de</p>
                    <p id="num">0</p>
                    <p id="txt">de pessoas estão <br> adotando essa nova prática</p>
                </div>
            </div>
        </div>
    </section>

    <section class="artigos-dicas">
        <div class="margem">
            <h2>Artigos e Dicas para uma Vida Sustentável</h2>
            <div class="linha"></div>
        </div>
    </section>

    <section class="historias">
        <div class="margem">
            <h2>Histórias Inspiradoras</h2>
            <div class="carousel">
                <div class="relatos-container">
                    <div class="relato">
                        <p class="nome">Maria</p>
                        <p class="funcao">Agricultora Familiar</p>
                        <p class="txt">"Quando descobri essa plataforma, minha vida mudou. Hoje consigo vender meus produtos diretamente para quem precisa, sem intermediários. Ver as pessoas se alimentando com o que planto me dá uma sensação de propósito que nunca tive antes."</p>
                    </div>
                    <div class="relato">
                        <p class="nome">João</p>
                        <p class="funcao">Consumidor</p>
                        <p class="txt">"Sempre fui preocupado com a origem dos alimentos que coloco na mesa. Agora, sei exatamente de onde vem cada fruta, cada legume. É gratificante ajudar quem está no campo e ainda comer com mais qualidade."</p>
                    </div>
                    <div class="relato">
                        <p class="nome">Ana</p>
                        <p class="funcao">Nutricionista</p>
                        <p class="txt">"Recomendar alimentos frescos e de qualidade sempre foi uma prioridade para mim, mas agora posso indicar alimentos de agricultores locais. Sinto que faço parte de algo maior, que conecta saúde e sustentabilidade."</p>
                    </div>
                    <div class="relato">
                        <p class="nome">Pedro</p>
                        <p class="funcao">Agricultor Familiar</p>
                        <p class="txt">"Antes, eu dependia de feiras que nem sempre davam resultado. Hoje, posso garantir uma renda fixa vendendo diretamente para as famílias. É incrível ver como a tecnologia pode aproximar quem planta de quem consome."</p>
                    </div>
                    <div class="relato">
                        <p class="nome">Carla</p>
                        <p class="funcao">Consumidora</p>
                        <p class="txt">"Troquei o supermercado por essa nova forma de comprar e não me arrependo. Os produtos são frescos, mais baratos e, o melhor, sei que estou ajudando pequenas famílias. Nunca pensei que isso fosse possível."</p>
                    </div>
                </div>
            </div>
            <div class="indicators">
                <span class="dot active" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </section>

    <section class="motivos">
        <div class="margem">
            <div class="flex">
                <div class="alimentos">
                    <img src="{{ asset('img/comida-dietetica.png') }}" alt="">
                    <h3>Alimentos mais frescos e saudáveis</h3>
                    <p>Produtos da agricultura familiar percorrem distâncias mais curtas até chegar à mesa, garantindo maior frescor e valor nutricional em cada refeição.</p>
                </div>
                <div class="sustentabilidade">
                    <img src="{{ asset('img/broto.png') }}" alt="">
                    <h3>Sustentabilidade em ação</h3>
                    <p>Agricultura familiar preserva o meio ambiente ao usar práticas sustentáveis ​​e respeitar a biodiversidade, promovendo um consumo consciente.</p>
                </div>
                <div class="impacto">
                    <img src="{{ asset('img/ajudando.png') }}" alt="">
                    <h3>Impacto social direto</h3>
                    <p>Ao apoiar agricultores familiares, você fortalece a economia local e ajuda comunidades rurais a se desenvolverem, promovendo uma cadeia alimentar mais justa e solidária.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="slideshow">
        <img src="{{ asset('img/watering-1501209_1280.jpg') }}" alt="">
        <img src="{{ asset('img/nutricionista_2.jpeg') }}" alt="">
        <div class="quadrado">
            <div class="quadrado1"></div>
            <div class="quadrado2"></div>
            <div class="quadrado3"></div>
            <div class="quadrado4"></div>
            <div class="quadrado5"></div>
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