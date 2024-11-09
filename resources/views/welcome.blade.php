<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
       @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <header class="bg-gray-800 text-white dark:bg-gray-900 dark:text-white">
            <x-Navigation>
                <!-- <x-navigation-item href="#" :isActive = "true">Acheter</x-navigation-item>
                <x-navigation-item href="#">Location</x-navigation-item>
                <x-navigation-item href="#">Vendre</x-navigation-item>
                <x-navigation-item href="#"></x-navigation-item> -->
            </x-Navigation>
        </header>
        <main></main>
        <footer></footer>
    </body>
</html>
