<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-black bg-gray-100 dark:bg-body dark:text-white" >
        <div class="container flex flex-col justify-between min-h-screen mx-auto">

            <!-- Page Content -->
            <main data-router-wrapper>
                <article data-router-view="@yield('view')">
                    <livewire:shared.navigation />
                    {{ $slot }}
                </article>
            </main>

            <livewire:shared.footer />
        </div>
    </body>
</html>
