<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ImmoCi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-white/50 dark:text-black/50">
    <!-- Header -->
    <header id="main-header"
        class="fixed top-0 left-0 w-full bg-transparent backdrop-blur transition-all duration-300 ease-in-out z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <a href="#" id="logo-text"
                class="text-white font-bold text-lg transition-colors duration-300">IMMO_CI</a>

            <!-- Navbar -->
            <nav>
                <ul id="nav-links" class="flex space-x-6 text-white transition-colors duration-300">
                    <li><a href="#" class="hover:text-gray-300">Acheter</a></li>
                    <li><a href="#" class="hover:text-gray-300">Louer</a></li>
                    <li><a href="#" class="hover:text-gray-300">Vendre</a></li>
                    <li><a href="#" class="hover:text-gray-300">Prêt immobilier</a></li>
                    <li><a href="#" class="hover:text-gray-300">Investissement</a></li>
                    <li><a href="#" class="hover:text-gray-300">Trouver un agent</a></li>
                </ul>
            </nav>

            <!-- Buttons -->
            <div id="buttons" class="flex space-x-4">
                <a href="#"
                    class="text-white border border-white px-4 py-2 rounded transition-colors duration-300 hover:bg-gray-700">Connexion</a>
                <a href="#"
                    class="bg-blue-600 text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-blue-700">Inscription</a>
            </div>
        </div>
    </header>

    <!-- Hero Section (Placeholder) -->


</body>

</html>
