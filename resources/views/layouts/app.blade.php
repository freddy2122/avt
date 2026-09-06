<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', config('cabinet.meta_description'))">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- Tailwind CSS via CDN : aucun node_modules, aucune étape de build --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brown: '#3f2a2a',
                        'brown-dark': '#33201f',
                        cream: '#eee0bd',
                        'cream-soft': '#f5ecd6',
                        ink: '#3c3c3b',
                        gris: '#f0f0ee',
                    },
                    fontFamily: {
                        title: ['"Playfair Display"', 'Georgia', 'serif'],
                        body: ['Jost', 'system-ui', 'sans-serif'],
                    },
                },
            },
        };
    </script>

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body class="font-body antialiased bg-white text-ink">

    @include('partials.header')

    @yield('content')

    <script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
