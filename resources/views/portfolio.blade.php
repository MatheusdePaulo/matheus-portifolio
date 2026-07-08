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
<body class="bg-[#08080f] text-white overflow-hidden">

<div class="flex h-screen w-full">
    @include('partials.hero-left')
    @include('partials.hero-right')
</div>

@include('partials.scripts')

</body>
</html>
