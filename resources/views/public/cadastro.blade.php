<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/public/cadastro.css') }}">
    <script src="{{ asset('js/public/cadastro.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <title>Cadastre-se</title>
</head>
<body>
    <main>
        <div class="login">
            <div class="circulo">
                <i class="bi bi-person"></i>
            </div>
            <form class="contact-form" action="#" method="post">
                <div class="input-group">
                    <i class="bi bi-envelope"></i>
                    <input type="email" id="email" name="email" required placeholder="E-mail">
                </div>
                <div class="input-group">
                    <i class="bi bi-lock"></i>
                    <input type="password" id="password" name="password" required placeholder="Senha">
                </div>

                <div class="input-group">
                    <label for="role">Tipo de Cadastro:</label>
                    <select id="role" onchange="showFields()">
                        <option value="">Escolha...</option>
                        <option value="comprador">Comprador</option>
                        <option value="agricultor">Agricultor</option>
                        <option value="nutricionista">Nutricionista</option>
                    </select>
                </div>

                <div id="comprador-fields" class="extra-fields">
                    <div class="input-group">
                        <input type="text" name="nome" placeholder="Nome completo">
                    </div>
                    <div class="input-group">
                        <input type="text" name="endereco" placeholder="Endereço de entrega">
                    </div>
                    <div class="input-group">
                        <textarea name="preferencias" placeholder="Preferências alimentares (opcional)"></textarea>
                    </div>
                </div>

                <div id="agricultor-fields" class="extra-fields">
                    <div class="input-group">
                        <input type="text" name="nome" placeholder="Nome completo">
                    </div>
                    <div class="input-group">
                        <input type="text" name="fazenda" placeholder="Nome da fazenda/propriedade">
                    </div>
                    <div class="input-group">
                        <textarea name="produtos" placeholder="Tipos de produtos oferecidos"></textarea>
                    </div>
                    <div class="input-group">
                        <input type="text" name="localizacao" placeholder="Localização da propriedade">
                    </div>
                </div>

                <div id="nutricionista-fields" class="extra-fields">
                    <div class="input-group">
                        <input type="text" name="nome" placeholder="Nome completo">
                    </div>
                    <div class="input-group">
                        <input type="text" name="crn" placeholder="CRN (Conselho Regional de Nutricionistas)">
                    </div>
                    <div class="input-group">
                        <textarea name="especializacao" placeholder="Áreas de especialização"></textarea>
                    </div>
                    <div class="input-group">
                        <input type="text" name="disponibilidade" placeholder="Disponibilidade para consultas">
                    </div>
                </div>

                <button type="submit">Cadastrar</button>
            </form>

            <div class="cadastro">
                <p>Já possui conta?</p>
                <a href="{{ route('public.login') }}">Faça login</a>
            </div>
        </div>
    </main>
</body>
</html>