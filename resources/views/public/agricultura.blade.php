<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultura Familiar</title>
    <link rel="stylesheet" href="{{ asset('css/public/agricultura.css') }}">
    <script src="{{ asset('js/public/agricultura.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

<section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">O que é Agricultura Familiar?</h2>
                <div class="visao">
                    <p>A agricultura familiar é um modelo de produção agrícola onde pequenas propriedades rurais são cultivadas por famílias, que também são responsáveis pela maior parte da força de trabalho. Ao contrário da agricultura industrial, a familiar prioriza a sustentabilidade e o cultivo diversificado de alimentos. Esse modelo é fundamental para a produção de alimentos de qualidade, ao mesmo tempo que preserva a cultura e os recursos naturais das comunidades.</p>
                    <img src="{{ asset('img/Agricultor.png') }}" alt="Agricultor com uma caixa de vegetais">
                </div>
            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">Importância da Agricultura Familiar para a Segurança Alimentar</h2>
                <div class="visao">
                    <p>A agricultura familiar é responsável por cerca de 70% dos alimentos consumidos no Brasil, o que a torna crucial para a segurança alimentar do país. Ao produzir alimentos frescos e nutritivos, ela garante o abastecimento das comunidades locais e combate a fome. Além disso, ao promover a diversificação das culturas, a agricultura familiar ajuda a garantir uma alimentação saudável e equilibrada para a população.</p>
                    <img src="{{ asset('img/Criança.png') }}" alt="Criança colhendo frutas">
                </div>
            </div>
        </div>
    </section>

<section class="beneficios">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4f3011" fill-opacity="1" d="M0,32L80,64C160,96,320,160,480,154.7C640,149,800,75,960,48C1120,21,1280,43,1360,53.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
          </svg>
        <div class="quadrado-fundo">
            <h2>Benefícios da agricultura familiar.</h2>
            <div class="flex">
                <div class="quadrado">
                    <p class="indicador">1.</p>
                    <p class="txt">Produção de alimentos frescos e saudáveis.</p>
                </div>
                <div class="quadrado">
                    <p class="indicador">2.</p>
                    <p class="txt">Geração de empregos nas comunidades rurais.</p>
                </div>
                <div class="quadrado">
                    <p class="indicador">3.</p>
                    <p class="txt">Práticas agrícolas sustentáveis e ecológicas.</p>
                </div>
            </div>
            <div class="flex">
                <div class="quadrado">
                    <p class="indicador">4.</p>
                    <p class="txt">Contribuição para a segurança alimentar e nutricional.</p>
                </div>
                <div class="quadrado">
                    <p class="indicador">5.</p>
                    <p class="txt">Acesso maior aos alimentos saudáveis.</p>
                </div>
                <div class="quadrado">
                    <p class="indicador">6.</p>
                    <p class="txt">Redução do uso de agrotóxicos e conservação do solo.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4f3011" fill-opacity="1" d="M0,256L60,261.3C120,267,240,277,360,245.3C480,213,600,139,720,138.7C840,139,960,213,1080,224C1200,235,1320,181,1380,154.7L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
          </svg>
    </section>

<section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">Agricultura Familiar e Economia Local</h2>
                <div class="visao">
                    <p>A agricultura familiar desempenha um papel fundamental no desenvolvimento da economia local. Por meio da venda direta em feiras, mercados locais e cooperativas, pequenos produtores conseguem aumentar sua renda e fortalecer suas comunidades. Essa produção de alimentos também reduz a dependência de grandes redes de distribuição e melhora o acesso dos consumidores a produtos de qualidade.</p>
                    <img src="{{ asset('img/Família.png') }}" alt="Família unida">
                </div>
            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">Sustentabilidade e Conservação do Meio Ambiente</h2>
                <div class="visao">
                    <p>A sustentabilidade está no coração da agricultura familiar. Os agricultores familiares geralmente utilizam práticas de cultivo que respeitam o meio ambiente, como a rotação de culturas, a preservação de florestas e a redução do uso de produtos químicos. Essas práticas ajudam a manter o equilíbrio dos ecossistemas, proteger o solo e garantir a biodiversidade, contribuindo para um futuro mais sustentável.</p>
                    <img src="{{ asset('img/Cultivando.png') }}" alt="Cultivando sustento">
                </div>
            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">Desafios Enfrentados pela Agricultura Familiar</h2>
                <div class="visao">
                    <p>Apesar de sua importância, a agricultura familiar enfrenta muitos desafios. O acesso ao crédito e a tecnologias modernas é limitado para muitos agricultores, o que pode dificultar a competitividade com grandes produtores. Além disso, questões como o acesso a mercados maiores, o transporte e a logística de distribuição ainda representam barreiras. O fortalecimento de políticas públicas e programas de apoio é essencial para garantir o crescimento e a sobrevivência desses pequenos agricultores Conheça mais sobre essas políticas públicas e programas:</p>
                    <img src="{{ asset('img/Força.png') }}" alt="Agricultura Familiar.">
                </div>
            </div>
        </div>
    </section>

<div class="secao-projetos">
        <button class="botao-carrossel esquerda" onclick="rolarCarrossel(-1)">&#10094;</button>
        <div class="carrossel-projetos" id="carrossel">
            <div class="item-projeto">
                <h3>Programa de Aquisição de Alimentos (PAA)</h3>
                <p>O PAA facilita a compra de alimentos produzidos por agricultores familiares para promover a segurança alimentar.</p>
                <a href="https://www.gov.br/mds/pt-br/acoes-e-programas/acesso-a-alimentos-e-a-agua/programa-de-aquisicao-de-alimentos">Saiba Mais</a>
            </div>
            <div class="item-projeto">
                <h3>Programa Nacional de Alimentação Escolar (PNAE)</h3>
                <p>O PNAE incentiva a compra de alimentos da agricultura familiar para escolas públicas, ajudando a garantir refeições saudáveis aos alunos.</p>
                <a href="https://www.gov.br/fnde/pt-br/acesso-a-informacao/acoes-e-programas/programas/pnae">Saiba Mais</a>
            </div>
            <div class="item-projeto">
                <h3>Pronaf - Programa Nacional de Fortalecimento da Agricultura Familiar</h3>
                <p>O Pronaf oferece financiamento com condições especiais para apoiar a produção da agricultura familiar.</p>
                <a href="https://www.gov.br/pt-br/servicos/acessar-o-programa-nacional-de-fortalecimento-da-agricultura-familiar-pronaf">Saiba Mais</a>
            </div>
            <div class="item-projeto">
                <h3>Programa de Garantia de Preços para a Agricultura Familiar (PGPAF)</h3>
                <p>O PGPAF garante preços mínimos aos produtos da agricultura familiar em caso de quedas no mercado.</p>
                <a href="https://www.gov.br/pt-br/servicos/acessar-o-programa-de-garantia-de-preco-para-a-agricultura-familiar-pgpaf">Saiba Mais</a>
            </div>
            <div class="item-projeto">
                <h3>Programa Dom Helder Câmara</h3>
                <p>O programa oferece assistência técnica e extensão rural para o desenvolvimento sustentável em áreas pobres do semiárido.</p>
                <a href="https://www.gov.br/agricultura/pt-br/assuntos/noticias/projeto-dom-helder-camara-oferece-assistencia-tecnica-rural-para-reduzir-desigualdade-no-semiarido">Saiba Mais</a>
            </div>
        </div>
        <button class="botao-carrossel direita" onclick="rolarCarrossel(1)">&#10095;</button>
    </div>

<section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">Como Apoiar a Agricultura Familiar</h2>
                <div class="visao">
                    <p>Existem diversas maneiras de apoiar a agricultura familiar. Comprar diretamente de pequenos produtores em feiras e mercados locais é uma forma de contribuir para a economia rural e garantir alimentos mais saudáveis e frescos. Optar por produtos orgânicos e sustentáveis também incentiva práticas agrícolas que respeitam o meio ambiente. Ao fazer essas escolhas, você não apenas valoriza o trabalho do agricultor familiar, mas também promove um consumo mais consciente e sustentável.</p>
                    <img src="{{ asset('img/União.png') }}" alt="Apoiar a Agricultura Familiar">
                </div>
            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="esquerda">Tecnologia e Inovação na Agricultura Familiar.</h2>
                <div class="visao">
                    <p>A inovação também está presente na agricultura familiar. Com o uso de tecnologias acessíveis, como sistemas de irrigação eficientes e manejo agroecológico, pequenos agricultores conseguem aumentar sua produtividade de forma sustentável. Além disso, iniciativas de agricultura orgânica e ecológica vêm ganhando espaço, mostrando que é possível aliar tecnologia e tradição para promover uma agricultura mais equilibrada e sustentável.</p>
                    <img src="{{ asset('img/Tecnologia.png') }}" alt="Avanço tecnológico">
                </div>
            </div>
        </div>
    </section>

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