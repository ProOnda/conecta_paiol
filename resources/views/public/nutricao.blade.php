<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrição</title>
    <link rel="stylesheet" href="{{ asset('css/public/nutricao.css') }}">
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

<section class="conteudo">
        <div class="conteudo1">
            <div class="margem">
                <h2 class="titulo1">O Papel do Nutricionista: Onde e Como Ele Pode Atuar.</h2>
                <p>O nutricionista é um profissional essencial na promoção da saúde e bem-estar, com foco em orientar as pessoas a adotarem hábitos alimentares saudáveis ​​e equilibrados. A principal função do nutricionista é auxiliar na elaboração de dietas adequadas às necessidades específicas de cada pessoa, levando em consideração fatores como idade, condições de saúde, estilo de vida e preferências alimentares.</p>
            </div>
        </div>
    </section>

    <section class="area-atuacao">
        <div class="margem">
            <h2>Área de Atuação</h2>
            <div class="flex" id="d">
                <div class="conteudo">
                    <h3>Nutrição Clínica</h3>
                    <p>Atuação em hospitais, clínicas e consultórios, realizando diagnósticos nutricionais, acompanhamento de pacientes com doenças crônicas ou que necessitam de dietas específicas, como obesidade, diabetes, hipertensão, entre outros.</p>
                </div>
                <div class="imagem">
                    <img src="{{ asset('img/Nutrição Clinica.jpg') }}" alt="">
                </div>
            </div>

            <div class="flex" id="e">
                <div class="imagem">
                    <img src="{{ asset('img/Saúde Pública.jpg') }}" alt="">
                </div>
                <div class="conteudo">
                    <h3>Saúde Pública</h3>
                    <p>Atuação em programas e políticas de saúde pública, desenvolvendo ações de educação alimentar e nutricional para a comunidade, visando a prevenção de doenças e a promoção da saúde em nível coletivo.</p>
                </div>
            </div>

            <div class="flex" id="d">
                <div class="conteudo">
                    <h3>Indústria de Alimentos</h3>
                    <p>Participação na formulação, controle de qualidade e rotulagem de alimentos, garantindo que os produtos atendam às normas de segurança alimentar e sejam adequados às necessidades nutricionais dos consumidores.</p>
                </div>
                <div class="imagem">
                    <img src="{{ asset('img/Industria de Alimentos.jpg') }}" alt="">
                </div>
            </div>

            <div class="flex" id="e">
                <div class="imagem">
                    <img src="{{ asset('img/Nutrição Esportiva.jpg') }}" alt="">
                </div>
                <div class="conteudo">
                    <h3>Nutrição Esportiva</h3>
                    <p>Foco no acompanhamento de atletas e praticantes de atividade física, elaborando dietas personalizadas para melhorar desempenho, recuperação muscular e garantir equilíbrio energético.</p>
                </div>
            </div>

            <div class="flex" id="d">
                <div class="conteudo">
                    <h3>Alimentação Escolar</h3>
                    <p>Planejamento de cardápios equilibrados e saudáveis para escolas, visando melhorar o desempenho e o desenvolvimento das crianças e adolescentes, além de promover a educação alimentar desde cedo.</p>
                </div>
                <div class="imagem">
                    <img src="{{ asset('img/Alimentação Escolar.jpg') }}" alt="">
                </div>
            </div>

            <div class="flex" id="e">
                <div class="imagem">
                    <img src="{{ asset('img/Consultoria e Assessoria.jpg') }}" alt="">
                </div>
                <div class="conteudo">
                    <h3>Consultoria e Assessoria</h3>
                    <p>Oferecimento de serviços de consultoria para restaurantes, empresas e escolas, auxiliando no planejamento de cardápios, otimização de processos de produção de refeições e no treinamento de equipes.</p>
                </div>
            </div>

            <div class="flex" id="d">
                <div class="conteudo">
                    <h3>Pesquisa e Ensino</h3>
                    <p>Atuação em universidades e centros de pesquisa, desenvolvendo estudos sobre nutrição e saúde, além de formar novos profissionais para o mercado através da docência.</p>
                </div>
                <div class="imagem">
                    <img src="{{ asset('img/Pesquisa e Ensino.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="conteudo4">
            <div class="margem">
                <h2 class="titulo4">A Importância da Nutrição na Saúde.</h2>
                <p>A nutrição é uma peça fundamental para a saúde física e mental, influenciando diretamente nossa qualidade de vida. Uma alimentação balanceada, rica em nutrientes essenciais, como vitaminas, minerais, fibras, proteínas e gorduras saudáveis, ajuda a fortalecer o sistema imunológico, melhorar o metabolismo e prevenir uma série de doenças crônicas. O nutricionista, nesse contexto, é o profissional capacitado para identificar as necessidades nutricionais de cada indivíduo e elaborar planos alimentares que garantam o consumo adequado desses nutrientes.</p>
                <p>Além disso, uma dieta equilibrada contribui para a manutenção do peso ideal, aumento da energia e até mesmo para o bem-estar emocional. O nutricionista é fundamental para orientar mudanças alimentares que promovam a saúde a longo prazo, adaptando-se às preferências pessoais e condições de saúde.</p>
            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="margem">
            <h2 class="titulo5">Benefícios dos Alimentos Frescos.</h2>
            <p>Alimentos frescos, como frutas, legumes e verduras, oferecem uma riqueza de nutrientes essenciais que muitas vezes se perdem em alimentos processados ​​ou industrializados. Eles são naturalmente mais ricos em vitaminas, minerais e antioxidantes, além de terem menos conservantes e aditivos químicos, o que os torna uma escolha mais saudável.</p>
            <p>O nutricionista pode educar os pacientes sobre os benefícios de priorizar alimentos frescos na melhor dieta, ensinando a escolher os ingredientes e formas de preparo para maximizar os nutrientes. Ao consumir alimentos frescos da agricultura familiar, por exemplo, além de melhorar a saúde, os pacientes também incentivam práticas agrícolas sustentáveis ​​e o fortalecimento da economia local.</p>
        </div>
    </section>

    <section class="conteudo">
        <div class="margem">
            <h2 class="titulo6">Sazonalidade dos Alimentos e Suas Vantagens.</h2>
            <p>Consumir alimentos da estação é uma prática benéfica tanto para a saúde quanto para o meio ambiente. Alimentos sazonais, por serem colhidos em seu ponto ideal de maturação, são mais nutritivos, saborosos e costumam ser mais baratos. Eles também desativam menos insumos químicos e são produzidos de forma mais sustentável, sem necessidade de longos transportes que aumentem a pegada de carbono.</p>
            <p>O nutricionista pode educar os pacientes sobre a importância da sazonalidade, fornecendo informações sobre quais alimentos estão disponíveis em cada época do ano e incentivando o consumo consciente. Essa prática também estimula a biodiversidade e a valorização da produção local, ajudando os consumidores a adotarem uma alimentação mais saudável e ambientalmente responsável.</p>
        </div>
    </section>

    <section class="conteudo">
        <div class="margem">
            <h2 class="titulo7">Conscientização sobre a Alimentação Sustentável.</h2>
            <p>A escolha por uma alimentação sustentável vai além da nutrição individual; ela abrange o impacto ambiental e social de nossas escolhas alimentares. Alimentos produzidos de forma sustentável, como os provenientes da agricultura familiar, respeitando os ciclos naturais da terra, utilizam menos recursos hídricos e energéticos e promovem práticas agrícolas mais responsáveis.</p>
            <p>O nutricionista, ao recomendar uma dieta sustentável, incentiva o consumo de alimentos que minimizem os danos ao meio ambiente, como produtos orgânicos e locais, além de conscientizar sobre a redução do desperdício de alimentos. Esse profissional também pode ajudar a criar uma conexão mais forte entre o consumidor e os produtores locais, promovendo a compra de alimentos frescos e saudáveis ​​diretamente das comunidades agrícolas.</p>
        </div>
    </section>

    <section class="conteudo">
        <div class="margem">
            <h2 class="titulo8">Alimentação e Comunidade.</h2>
            <p>O nutricionista desempenha um papel importante na construção de uma ponte entre a alimentação saudável e a comunidade. Ao apoiar a agricultura familiar, o nutricionista não apenas contribui para a saúde dos indivíduos, mas também fortalece a economia local e valoriza práticas agrícolas sustentáveis. A escolha de alimentos produzidos localmente promove um ciclo de benefícios: melhora a saúde da população, apoia pequenos agricultores e preserva a cultura alimentar regional</p>
            <p>Ao incentivar o consumo de produtos locais, o nutricionista também pode ajudar a reduzir as desigualdades alimentares, garantindo que mais pessoas tenham acesso a alimentos frescos e nutritivos, especialmente em áreas urbanas onde o acesso a esse tipo de alimento pode ser limitado.</p>
        </div>
    </section>

    <section class="conteudo">
        <div class="margem">
            <h2 class="titulo9">Educação Alimentar com o Nutricionista.</h2>
            <p>A educação alimentar é uma das principais responsabilidades do nutricionista. Esse profissional tem o poder de transformar a relação das pessoas com a comida, ajudando a entender os benefícios de uma alimentação saudável e como aplicá-la no dia a dia. Isso inclui ensinar sobre os grupos alimentares, a importância do equilíbrio nas refeições, o controle de porções e a leitura de rótulos.</p>
            <p>O nutricionista também atua em programas de educação alimentar para populações específicas, como crianças, idosos e pessoas com doenças crônicas, adaptando o conteúdo de forma acessível e prática. Através dessa educação, o nutricionista pode capacitar as pessoas a fazerem escolhas alimentares mais saudáveis ​​e conscientes, garantindo uma melhor qualidade de vida e contribuindo para uma sociedade mais informada e saudável.</p>
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