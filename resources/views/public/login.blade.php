<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/public/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <title>Login</title>
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
                <button type="submit">Login</button>
            </form>

            <div class="cadastro">
                <p>Não possui cadastro? </p>
                <a href="{{ route('public.cadastro') }}">Cadastre-se</a>
            </div>
        </div>
    </main>
</body>
</html>