<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matheus de Paulo</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=Bebas+Neue&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.styles')
</head>
<body class="bg-[#08080f] text-white">

<div class="flex w-full" style="min-height: 100vh;">

    {{-- ESQUERDA sticky --}}
    <div class="w-[35%] flex-shrink-0" style="position: sticky; top: 0; height: 100vh; overflow: hidden;">
        @include('partials.hero-left')
    </div>

    {{-- DIREITA scrollável --}}
    <div class="w-[65%]" style="background: #0f0f1e; overflow-y: auto; height: 100vh;">
        @include('partials.hero-right')
        @include('partials.projetos')
        @include('partials.sobre')
        @include('partials.habilidades')
        @include('partials.servicos')
        @include('partials.contato')
    </div>

</div>

@include('partials.scripts')

</body>
</html>
