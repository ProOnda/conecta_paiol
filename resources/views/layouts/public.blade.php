{{-- Parte relevante de resources/views/layouts/public.blade.php --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Conecta Paiol de Saberes')</title>
    {{-- Seus links para fontes e Bootstrap Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Bebas+Neue&family=BioRhyme:wght@200..800&family=Cookie&family=Jura:wght@300..700&family=Orbitron:wght@400..900&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet"> {{-- Adicionei Allison para o título --}}
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet"> {{-- Adicionei Almarai para textos --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- CSS Global (para header, footer, etc.) --}}
    <link rel="stylesheet" href="{{ asset('css/public/global.css') }}">
    @stack('styles') {{-- Para CSS específico da página atual --}}
    <link rel="stylesheet" href="{{ asset('css/public/inicio.css') }} ">
</head>
<body>
    @include('partials.public_header') {{-- Seu cabeçalho --}}

    <main>
        @yield('content') {{-- Conteúdo da página específica --}}
    </main>

     @include('partials.public_footer')
     
    @stack('scripts') {{-- Para JS específico da página atual --}}
</body>
</html>