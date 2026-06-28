<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Alveris | Haute Parfumerie & Artisanal Perfumery')</title>
    <meta name="description" content="Alveris Haute Parfumerie — Timeless Olfactory Masterpieces Crafted with Rare Natural Ingredients and Artisanal Precision in Grasse and Paris.">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo_alveris.png') }}" type="image/png">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#08080A] text-[#FAF8F5] font-sans antialiased selection:bg-[#C5A059] selection:text-[#08080A] min-h-screen flex flex-col justify-between overflow-x-hidden">

    <!-- Header Navigation -->
    <x-navbar />

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>
