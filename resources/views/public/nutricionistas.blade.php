@extends('layouts.public')

@push('styles')
    {{-- Seu main.css ou um CSS base já deve estar incluído no layouts.public --}}
    <link rel="stylesheet" href="{{ asset('css/public/nutricionistas.css') }}"> {{-- Estilos específicos para a página Nutricionistas --}}
@endpush

@section('title', 'Nutricionistas')

@section('full_header')
    @include('partials.header_cover', [
        'title' => 'O Papel do Nutricionista: Guia para uma Vida Saudável', // Título específico para Nutricionistas
        'description' => 'Descubra como esses profissionais transformam a saúde, a alimentação e as comunidades.', // Descrição específica para Nutricionistas
        'image_path' => 'img/public/image-header_cover.svg', // A mesma imagem genérica do header
        'alt_text' => 'Cesta de Alimentos Frescos e Saudáveis',
        'breadcrumb_items' => [
            ['label' => 'Inicio', 'route' => 'inicio'],
            ['label' => 'Nutricionistas', 'active' => true, 'route' => 'nutricionistas.index'] // O 'route' é uma referência da rota, não o nome da view
        ]
    ])
@endsection

@section('content')
    <section class="nutritionist-section">
        <div class="nutritionist-wrapper">
            <div class="nutritionist-content-text">
                <div class="section-header-content text-align-right">
                    <h2 class="section-title">O Nutricionista: Guia para uma Vida Saudável</h2>
                    <div class="line align-right"></div>
                </div>
                <div class="main-text-block text-align-justify">
                    <p class="description-text">
                        O nutricionista é o profissional essencial na promoção da saúde e bem-estar, atuando como um guia para a adoção de hábitos alimentares saudáveis e equilibrados. Sua principal função é elaborar dietas personalizadas, considerando idade, condições de saúde, estilo de vida e preferências, visando sempre a qualidade de vida e a prevenção de doenças.
                    </p>
                </div>
            </div>

            <div class="nutritionist-image-container-svg">
                <img src="{{ asset('img/public/nutricionista-banner.svg') }}" alt="Nutricionista preparando alimentos" class="combined-nutritionist-svg">
            </div>
        </div>
    </section>

    <section class="acting-areas-section">
        <div class="acting-areas-wrapper">
            <div class="section-header-content text-align-center">
                <h2 class="section-title">Áreas Essenciais de Atuação</h2>
                <div class="line align-center"></div>
            </div>

            <div class="acting-areas-content">
                <div class="acting-areas-divider-line">
                    <svg width="169" height="2153" viewBox="0 0 169 2153" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M104.67 6C104.67 8.94552 107.058 11.3333 110.004 11.3333C112.949 11.3333 115.337 8.94552 115.337 6C115.337 3.05448 112.949 0.666667 110.004 0.666667C107.058 0.666667 104.67 3.05448 104.67 6ZM22.5791 1354.51L22.2852 1355.47L22.5791 1354.51ZM95.6707 2147C95.6707 2149.95 98.0586 2152.33 101.004 2152.33C103.95 2152.33 106.337 2149.95 106.337 2147C106.337 2144.05 103.95 2141.67 101.004 2141.67C98.0586 2141.67 95.6707 2144.05 95.6707 2147ZM131.889 1982.05L131.498 1981.13L131.889 1982.05ZM106.364 2004.28L107.222 2004.79L106.364 2004.28ZM119.708 2099.22L119.164 2100.06L119.708 2099.22ZM137.19 1979.8L137.581 1980.72L137.19 1979.8ZM155.311 1877.9L156.297 1878.06L155.311 1877.9ZM145.403 1789.6L144.541 1790.11L145.403 1789.6ZM135.005 1765.03L134.005 1765.04L135.005 1765.03ZM141.399 1782.81L142.261 1782.3L141.399 1782.81ZM113.168 1233.86L113.909 1234.53L113.168 1233.86ZM85.1484 1256.09L84.6482 1255.23L85.1484 1256.09ZM32.7479 716.526L31.8751 716.038L32.7479 716.526ZM31.5603 243.585L30.6561 243.158L31.5603 243.585ZM140.882 1203.22L140.141 1202.55L140.882 1203.22ZM107.682 133.482L106.705 133.267C104.362 143.939 97.4742 156.164 84.0039 169.954L84.7193 170.653L85.4346 171.352C99.0629 157.399 106.209 144.856 108.659 133.696L107.682 133.482ZM84.7193 170.653L84.0039 169.954C56.5896 198.02 40.1114 223.146 30.6561 243.158L31.5603 243.585L32.4644 244.012C41.8137 224.225 58.1561 199.279 85.4346 171.352L84.7193 170.653ZM143.036 386.045L142.062 385.821C141.266 389.278 140.267 393.026 139.045 397.083L140.002 397.371L140.96 397.66C142.193 393.566 143.204 389.775 144.011 386.269L143.036 386.045ZM140.002 397.371L139.045 397.083C126.793 437.757 139.626 488.708 155.679 528.128L156.605 527.751L157.531 527.374C141.51 488.033 128.917 437.638 140.96 397.66L140.002 397.371ZM32.7479 716.526L31.8751 716.038C27.5264 723.813 25.1752 732.17 26.0448 740.28C26.9175 748.417 31.0234 756.196 39.3809 762.785L40 762L40.6191 761.215C32.6436 754.926 28.8435 747.62 28.0334 740.066C27.2203 732.484 29.4095 724.543 33.6206 717.014L32.7479 716.526ZM96.3941 997.105L95.7793 997.894C105.303 1005.32 115.772 1012.09 127.119 1017.89L127.574 1017L128.029 1016.11C116.8 1010.37 106.438 1003.67 97.0089 996.316L96.3941 997.105ZM127.574 1017L127.119 1017.89C146.275 1027.68 155.202 1039.31 158.037 1051C160.88 1062.72 157.651 1074.72 152.017 1085.35L152.9 1085.82L153.784 1086.29C159.542 1075.42 162.982 1062.9 159.98 1050.52C156.97 1038.11 147.538 1026.08 128.029 1016.11L127.574 1017ZM140.882 1203.22L140.141 1202.55L112.426 1233.19L113.168 1233.86L113.909 1234.53L141.624 1203.89L140.882 1203.22ZM85.1484 1256.09L84.6482 1255.23C58.608 1270.27 28.6568 1290.58 12.3132 1309.38C4.17529 1318.74 -0.80396 1327.97 0.1068 1336.12C1.03473 1344.42 7.97346 1351.07 22.2852 1355.47L22.5791 1354.51L22.8729 1353.56C8.81763 1349.24 2.88714 1342.98 2.09442 1335.89C1.28453 1328.65 5.7332 1320 13.8226 1310.69C29.9334 1292.16 59.6339 1271.98 85.6486 1256.96L85.1484 1256.09ZM22.5791 1354.51L22.2852 1355.47C40.8656 1361.18 52.6711 1369.11 59.5353 1377.86C66.385 1386.59 68.3761 1396.21 67.1933 1405.46L68.1853 1405.58L69.1772 1405.71C70.4221 1395.97 68.316 1385.81 61.1087 1376.62C53.9158 1367.46 41.7044 1359.35 22.8729 1353.56L22.5791 1354.51ZM72.804 1589.6L71.9324 1590.09C77.7306 1600.39 86.9702 1612.8 100.259 1627.67L101.004 1627L101.75 1626.33C88.5113 1611.53 79.3751 1599.24 73.6755 1589.11L72.804 1589.6ZM101.004 1627L100.259 1627.67C127.687 1658.34 136.08 1686.06 137.661 1709.36C138.453 1721.02 137.537 1731.6 136.422 1740.93C135.313 1750.21 133.985 1758.38 134.005 1765.04L135.005 1765.03L136.005 1765.03C135.985 1758.54 137.282 1750.59 138.408 1741.16C139.529 1731.79 140.461 1721.07 139.657 1709.22C138.046 1685.49 129.479 1657.35 101.75 1626.33L101.004 1627ZM141.399 1782.81L140.538 1783.32L144.541 1790.11L145.403 1789.6L146.264 1789.09L142.261 1782.3L141.399 1782.81ZM158.4 1859.11L157.413 1858.95L154.324 1877.74L155.311 1877.9L156.297 1878.06L159.387 1859.27L158.4 1859.11ZM119.708 2099.22L119.164 2100.06C121.667 2101.68 123.381 2103.69 124.202 2106.15C125.024 2108.62 124.988 2111.65 123.766 2115.39C121.309 2122.9 114.137 2132.99 100.311 2146.28L101.004 2147L101.697 2147.72C115.572 2134.38 123.05 2124.01 125.667 2116.01C126.983 2111.98 127.091 2108.5 126.099 2105.52C125.105 2102.54 123.046 2100.19 120.251 2098.38L119.708 2099.22ZM137.19 1979.8L136.8 1978.88L131.498 1981.13L131.889 1982.05L132.279 1982.97L137.581 1980.72L137.19 1979.8ZM106.364 2004.28L105.505 2003.77L85.6417 2036.99L86.5 2037.5L87.3583 2038.01L107.222 2004.79L106.364 2004.28ZM131.889 1982.05L131.498 1981.13C120.653 1985.73 111.551 1993.66 105.505 2003.77L106.364 2004.28L107.222 2004.79C113.05 1995.05 121.825 1987.4 132.279 1982.97L131.889 1982.05ZM86.5 2037.5L85.6461 2036.98C78.2886 2049.05 81.0469 2061.22 88.3958 2072.09C95.7232 2082.92 107.697 2092.63 119.164 2100.06L119.708 2099.22L120.251 2098.38C108.873 2091.01 97.1593 2081.48 90.0526 2070.97C82.9672 2060.49 80.5445 2049.19 87.3539 2038.02L86.5 2037.5ZM160.982 1910.11L160.11 1910.6C174.233 1935.76 163.359 1967.61 136.8 1978.88L137.19 1979.8L137.581 1980.72C165.238 1968.98 176.561 1935.82 161.854 1909.62L160.982 1910.11ZM155.311 1877.9L154.324 1877.74C152.468 1889.03 154.508 1900.62 160.11 1910.6L160.982 1910.11L161.854 1909.62C156.474 1900.04 154.515 1888.91 156.297 1878.06L155.311 1877.9ZM145.403 1789.6L144.541 1790.11C156.761 1810.84 161.316 1835.2 157.413 1858.95L158.4 1859.11L159.387 1859.27C163.366 1835.06 158.722 1810.23 146.264 1789.09L145.403 1789.6ZM135.005 1765.03L134.005 1765.04C134.025 1771.76 137.284 1777.8 140.538 1783.32L141.399 1782.81L142.261 1782.3C138.992 1776.76 136.023 1771.15 136.005 1765.03L135.005 1765.03ZM70.6346 1471.15L69.7953 1471.7C74.6246 1479.15 76.1183 1488.18 75.8542 1498.12C75.5899 1508.08 73.5708 1518.84 71.4699 1529.74C69.3758 1540.61 67.2 1551.6 66.6847 1561.89C66.1692 1572.17 67.3066 1581.86 71.9324 1590.09L72.804 1589.6L73.6755 1589.11C69.3125 1581.35 68.1757 1572.09 68.6822 1561.99C69.189 1551.87 71.3316 1541.03 73.4337 1530.12C75.5291 1519.25 77.5841 1508.32 77.8535 1498.18C78.1231 1488.02 76.6101 1478.54 71.474 1470.61L70.6346 1471.15ZM113.168 1233.86L112.426 1233.19C104.46 1242 94.9618 1249.27 84.6482 1255.23L85.1484 1256.09L85.6486 1256.96C96.1099 1250.92 105.781 1243.52 113.909 1234.53L113.168 1233.86ZM152.9 1085.82L152.017 1085.35C141.335 1105.5 134.688 1130.82 146.005 1151.14L146.879 1150.65L147.752 1150.17C136.954 1130.78 143.181 1106.29 153.784 1086.29L152.9 1085.82ZM40 762L39.3809 762.785C56.596 776.358 64.3786 794.258 67.4319 814.433C70.4915 834.65 68.7921 857.068 67.0862 879.622C65.3845 902.121 63.6762 924.755 66.8145 945.19C69.9592 965.668 77.9805 984.019 95.7793 997.894L96.3941 997.105L97.0089 996.316C79.7197 982.839 71.8819 965.012 68.7913 944.887C65.6943 924.72 67.3747 902.326 69.0805 879.773C70.7822 857.275 72.5093 834.617 69.4094 814.134C66.3033 793.61 58.3404 775.187 40.6191 761.215L40 762ZM149.207 618.591L148.395 618.008C135.344 636.161 111.947 650.674 88.8137 665.69C65.8022 680.626 43.0462 696.065 31.8751 716.038L32.7479 716.526L33.6206 717.014C44.506 697.552 66.7924 682.368 89.9026 667.367C112.891 652.446 136.695 637.709 150.019 619.175L149.207 618.591ZM68.1853 1405.58L67.1933 1405.46C65.799 1416.36 63.3743 1428.24 62.8274 1439.59C62.2782 1450.99 63.5953 1462.12 69.7953 1471.7L70.6346 1471.15L71.474 1470.61C65.6011 1461.54 64.285 1450.9 64.8251 1439.69C65.3675 1428.42 67.7546 1416.83 69.1772 1405.71L68.1853 1405.58ZM55.1032 312.352L54.4916 313.144C62.8354 319.594 73.127 324.887 83.6578 329.82C94.2277 334.771 105 339.344 114.484 344.404C123.965 349.463 131.999 354.93 137.092 361.576C142.143 368.168 144.332 375.957 142.062 385.821L143.036 386.045L144.011 386.269C146.419 375.807 144.082 367.41 138.679 360.36C133.319 353.364 124.972 347.733 115.426 342.64C105.882 337.548 94.98 332.915 84.5062 328.009C73.9934 323.084 63.8728 317.868 55.7149 311.561L55.1032 312.352ZM31.5603 243.585L30.6561 243.158C18.4359 269.022 32.2233 295.927 54.4916 313.144L55.1032 312.352L55.7149 311.561C33.7965 294.616 20.8247 268.648 32.4644 244.012L31.5603 243.585ZM156.605 527.751L155.679 528.128C167.746 557.76 166.976 592.162 148.395 618.008L149.207 618.591L150.019 619.175C169.092 592.645 169.794 557.484 157.531 527.374L156.605 527.751ZM146.879 1150.65L146.005 1151.14C155.265 1167.77 152.906 1188.44 140.141 1202.55L140.882 1203.22L141.624 1203.89C154.964 1189.15 157.429 1167.54 147.752 1150.17L146.879 1150.65ZM110.004 6L109.222 5.37636C96.0369 21.9035 97.7802 44.129 101.519 66.883C103.402 78.3379 105.79 89.9111 107.166 101.207C108.54 112.483 108.884 123.345 106.705 133.267L107.682 133.482L108.659 133.696C110.908 123.451 110.536 112.329 109.152 100.965C107.77 89.621 105.356 77.8973 103.493 66.5587C99.7408 43.7255 98.2173 22.3774 110.786 6.62364L110.004 6Z" fill="#363A24"/>
                        </svg>
                </div>

                <div class="area-item-list">
                    <div class="area-item item-right">
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/nutricao-clinica.jpg') }}" alt="Nutrição Clínica" class="item-image">
                        </div>
                        <div class="area-item-text">
                            <h3 class="area-item-title">Nutrição Clínica</h3>
                            <p class="area-item-description">Atuação em hospitais, clínicas e consultórios, realizando diagnósticos nutricionais, acompanhamento de pacientes com doenças crônicas ou que necessitam de dietas específicas, como obesidade, diabetes, hipertensão, entre outros.</p>
                        </div>
                    </div>

                    <div class="area-item item-left">
                        <div class="area-item-text">
                            <h3 class="area-item-title">Saúde Pública</h3>
                            <p class="area-item-description">A saúde pública na nutrição promove hábitos saudáveis, combate a má nutrição e incentiva práticas sustentáveis. Políticas como o PNAE ajudam a reduzir desigualdades e proteger o meio ambiente.</p>
                        </div>
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/saude-publica.jpg') }}" alt="Saúde Pública" class="item-image">
                        </div>
                    </div>

                    <div class="area-item item-right">
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/industria-alimentos.jpg') }}" alt="Indústria de Alimentos" class="item-image">
                        </div>
                        <div class="area-item-text">
                            <h3 class="area-item-title">Indústria de Alimentos</h3>
                            <p class="area-item-description">Participação na formulação, controle de qualidade e rotulagem de alimentos, garantindo que os produtos atendam às normas de segurança alimentar e sejam adequados às necessidades nutricionais dos consumidores.</p>
                        </div>
                    </div>

                    <div class="area-item item-left">
                        <div class="area-item-text">
                            <h3 class="area-item-title">Nutrição Esportiva</h3>
                            <p class="area-item-description">Foco no acompanhamento de atletas e praticantes de atividade física, elaborando dietas personalizadas para melhorar desempenho, recuperação muscular e garantir equilíbrio energético.</p>
                        </div>
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/nutricao-esportiva.jpg') }}" alt="Nutrição Esportiva" class="item-image">
                        </div>
                    </div>

                    <div class="area-item item-right">
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/alimentacao-escolar.jpg') }}" alt="Alimentação Escolar" class="item-image">
                        </div>
                        <div class="area-item-text">
                            <h3 class="area-item-title">Alimentação Escolar</h3>
                            <p class="area-item-description">Planejamento de cardápios equilibrados e saudáveis para escolas, visando melhorar o desempenho e o desenvolvimento das crianças e adolescentes, além de promover a educação alimentar desde cedo.</p>
                        </div>
                    </div>

                    <div class="area-item item-left">
                        <div class="area-item-text">
                            <h3 class="area-item-title">Consultoria e Assessoria</h3>
                            <p class="area-item-description">Oferecimento de serviços de consultoria para restaurantes, empresas e escolas, auxiliando no planejamento de cardápios, otimização de processos de produção de refeições e no treinamento de equipes.</p>
                        </div>
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/consultoria-assessoria.jpg') }}" alt="Consultoria e Assessoria" class="item-image">
                        </div>
                    </div>

                    <div class="area-item item-right">
                        <div class="area-item-image">
                            <img src="{{ asset('img/public/pesquisa-ensino.jpg') }}" alt="Pesquisa e Ensino" class="item-image">
                        </div>
                        <div class="area-item-text">
                            <h3 class="area-item-title">Pesquisa e Ensino</h3>
                            <p class="area-item-description">Atuação em universidades e centros de pesquisa, desenvolvendo estudos sobre nutrição e saúde, além de formar novos profissionais para o mercado através da docência.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fresh-food-section">
        <div class="fresh-food-image">
                <img src="{{ asset('img/public/cenoura.svg') }}" alt="">
            </div>
        <div class="fresh-food-wrapper">
            <div class="section-header-content text-align-center">
                <h2 class="section-title">Nutrição, Sustentabilidade e o Poder dos Alimentos Frescos</h2>
                <div class="line align-center"></div>
            </div>
            <div class="fresh-food-description-text">
                <p>
                    A nutrição vai muito além da contagem de calorias. Priorizar alimentos frescos, colhidos na estação e produzidos de forma sustentável é fundamental para sua saúde e para o planeta. Esses alimentos são naturalmente mais ricos em nutrientes, saborosos e livres de aditivos.
                </p>
                <p>
                    O nutricionista desempenha um papel crucial ao orientar sobre os benefícios da sazonalidade e da alimentação consciente, conectando o consumidor às práticas que minimizam o impacto ambiental e valorizam o produtor local. É uma escolha que fortalece a saúde individual e o sistema alimentar como um todo.
                </p>
            </div>
        </div>
        <div class="fresh-food-image">
                <img src="{{ asset('img/public/brocolis.svg') }}" alt="">
        </div>
    </section>
    <section class="community-education-section">
        <div class="community-education-wrapper">
            <div class="community-education-image-container">
                <img src="{{ asset('img/public/education-community-combined.svg') }}" alt="Pessoas interagindo com alimentos e nutricionista" class="combined-community-svg">
            </div>
            <div class="community-education-content-text">
                <div class="section-header-content text-align-left">
                    <h2 class="section-title">Educação Alimentar e Fortalecimento da Comunidade</h2>
                    <div class="line align-left"></div>
                </div>
                <div class="main-text-block text-align-justify">
                    <p>
                        Além do atendimento individual, o nutricionista é um agente de transformação social, atuando na educação alimentar e na promoção da saúde em comunidades. Ao incentivar o consumo de alimentos locais e apoiar a agricultura familiar, esses profissionais não só melhoram a saúde individual, mas também impulsionam a economia regional e reduzem as desigualdades no acesso a alimentos nutritivos.
                    </p>
                    <p>
                        No Conecta Paiol de Saberes, valorizamos essa conexão vital entre a nutrição, a comunidade e a alimentação de verdade. Juntos, construímos um futuro onde escolhas alimentares conscientes fortalecem a todos.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection