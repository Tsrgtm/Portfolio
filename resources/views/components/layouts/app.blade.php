<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Tusar Gautam - Laravel Developer in Nepal' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tiny5&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f4f3ee] dark:bg-[#00171f] py-2 px-4 font-sans">
    
    <x-layouts.partials.app-header />

    <main class="w-full max-w-3xl mx-auto">
        {{ $slot }}
    </main>

    <footer class="mt-8 py-4 text-center text-xs text-gray-600 dark:text-gray-400">
        <p>
            &copy; {{ date('Y') }} Tusar Gautam. Built with
            <a href="https://laravel.com" target="_blank" rel="noopener noreferrer" class="underline">Laravel</a>.
        </p>
    </footer>

</body>

</html>