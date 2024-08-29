<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23333333'/><text x='50%' y='55%' font-size='40' fill='%23ffffff' font-family='Arial' text-anchor='middle' alignment-baseline='middle'>ME</text></svg>">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body class="bg-gray-50 font-sans" x-data="{ showForm: true }">
    <div class="flex flex-col lg:flex-row min-h-screen">
        {{-- Sección Izquierda --}}
        <div class="w-full lg:w-1/2 bg-white flex flex-col justify-center items-center p-12"
            style="background-image: url(https://i.pinimg.com/564x/48/3b/55/483b55f28aa495e46cfaed596856a2c4.jpg); background-position: center; background-size: cover;">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <h1 class="text-2xl lg:text-4xl font-bold mb-2 text-center">Bienvenido al área de Usuarios de ModaExpress</h1>
            <p class="text-gray-500 mb-8 text-center">Regístrate aquí</p>
            <div class="text-lg font-semibold mb-4">
                <a href="{{ route('register') }}"
                    class="relative inline-flex items-center justify-center px-8 py-3 font-bold text-white bg-gradient-to-r from-blue-500 to-purple-600 rounded-full shadow-lg hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 transform hover:-translate-y-1 hover:scale-105 transition duration-300 ease-in-out">
                    Regístrate
                    <span
                        class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500 to-purple-600 opacity-0 rounded-full transition-opacity duration-300 ease-in-out group-hover:opacity-100"></span>
                </a>
            </div>
        </div>

        {{-- Sección Derecha --}}
        <div class="w-full lg:w-1/2 bg-gray-100 flex justify-center items-center p-8">
            <!-- Contenedor con transiciones -->
            <div x-show="showForm" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-95">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
