<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23333333'/><text x='50%' y='55%' font-size='40' fill='%23ffffff' font-family='Arial' text-anchor='middle' alignment-baseline='middle'>ME</text></svg>">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <title>ModaExpress</title>
    <style>
      
    </style>
</head>

<bodys>
    {{-- aqui va el encabezado con el nombre de empresa  --}}
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <p
                        class="text-green-400 text-3xl lg:text-5xl font-bold italic hover:text-green-600 transition ease-in-out delay-100">
                        Moda
                        <p class="text-black text-2xl lg:text-3xl font-bold italic animate-bounce">Express</p>
                    </p>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button id="mobile-menu-button" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative">
                    <button id="boton-menu" type="button"
                        class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                        aria-expanded="false">
                        Productos
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="menu"
                        class="hidden absolute left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                        <div class="p-4">
                            <!-- Menu items -->
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div
                                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Analisis
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">hola mundo</p>
                                </div>
                            </div>
                            <!-- Other menu items... -->
                        </div>
                        <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                            <a href="#"
                                class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                        clip-rule="evenodd" />
                                </svg>
                                Watch demo
                            </a>
                            <a href="#"
                                class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Contact sales
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Hola</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Hola</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Hola</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Ingresar <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 z-10 bg-gray-600 bg-opacity-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-20 w-full max-w-sm p-6 bg-white overflow-y-auto sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <p
                            class="text-green-400 text-3xl lg:text-5xl font-bold italic hover:text-green-600 transition ease-in-out delay-100">
                            Moda
                            <p
                                class="text-black text-2xl lg:text-3xl font-bold italic animate-bounce">Express</p>
                        </p>
                    </a>
                    <button id="close-mobile-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400">Producto</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400">Hola</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400">Hola</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- seccion numero 1 --}}
    <main class="numero1 flex items-center justify-center h-min bg-black relative">
        <div class="flex flex-col md:flex-row items-center justify-between w-full max-w-7xl relative">
            <!-- Botón de navegación anterior -->
            <button id="prevButton"
                class="text-green-500 hover:text-green-700 absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Contenedores del carrusel -->
            <div id="carouselItems"
                class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8 overflow-hidden">
                <!-- Elemento 1 -->
                <div
                    class="carousel-item flex-shrink-0 w-full flex flex-col md:flex-row items-center justify-between space-x-8 transition-transform duration-500 ease-in-out">
                    <div class="text-center md:text-left">
                        <h2 class="text-5xl font-bold text-pink-500">Chaqueta americana</h2>
                        <h3 class="text-3xl font-semibold text-pink-300">con una tela muy ligera</h3>
                        <p class="mt-4 text-lg text-pink-300">
                            y un diseño atrayente para los demás.
                        </p>
                    </div>
                    <img src="{{ asset('clothes/chaAme.png') }}" alt=""
                        class="object-contain max-w-full md:max-w-sm mt-4 md:mt-0"
                        style="mask-image:linear-gradient(rgb(213, 213, 213) 85%,transparent)">
                </div>

                <!-- Elemento 2 -->
                <div
                    class="carousel-item flex-shrink-0 w-full flex flex-col md:flex-row items-center justify-between space-x-8 transition-transform duration-500 ease-in-out">
                    <div class="text-center md:text-left">
                        <h2 class="text-5xl font-bold text-pink-500">Chaqueta americana</h2>
                        <h3 class="text-3xl font-semibold text-pink-300">con una tela muy ligera</h3>
                        <p class="mt-4 text-lg text-pink-300">
                            y un diseño atrayente para los demás.
                        </p>
                    </div>
                    <img src="{{ asset('clothes/chaAme.png') }}" alt=""
                        class="object-contain max-w-full md:max-w-sm mt-4 md:mt-0"
                        style="mask-image:linear-gradient(rgb(213, 213, 213) 85%,transparent)">
                </div>

                <!-- Elemento 3 -->
                <div
                    class="carousel-item flex-shrink-0 w-full flex flex-col md:flex-row items-center justify-between space-x-8 transition-transform duration-500 ease-in-out">
                    <div class="text-center md:text-left">
                        <h2 class="text-5xl font-bold text-pink-500">Chaqueta americana</h2>
                        <h3 class="text-3xl font-semibold text-pink-300">con una tela muy ligera</h3>
                        <p class="mt-4 text-lg text-pink-300">
                            y un diseño atrayente para los demás.
                        </p>
                    </div>
                    <img src="{{ asset('clothes/chaAme.png') }}" alt=""
                        class="object-contain max-w-full md:max-w-sm mt-4 md:mt-0"
                        style="mask-image:linear-gradient(rgb(213, 213, 213) 85%,transparent)">
                </div>
            </div>

            <!-- Botón de navegación siguiente -->
            <button id="nextButton"
                class="text-green-500 hover:text-green-700 absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </main>
    <script>
        const carouselItems = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;
        const intervalTime = 5000; // 5 segundos

        function showCurrentItem() {
            carouselItems.forEach((item, index) => {
                item.classList.toggle('hidden', index !== currentIndex);
            });
        }

        document.getElementById('prevButton').addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? carouselItems.length - 1 : currentIndex - 1;
            showCurrentItem();
        });

        document.getElementById('nextButton').addEventListener('click', () => {
            currentIndex = (currentIndex === carouselItems.length - 1) ? 0 : currentIndex + 1;
            showCurrentItem();
        });

        // Carrusel automático
        setInterval(() => {
            currentIndex = (currentIndex === carouselItems.length - 1) ? 0 : currentIndex + 1;
            showCurrentItem();
        }, intervalTime);

        // Mostrar el primer elemento inicialmente
        showCurrentItem();
    </script>

    {{-- seccion numero 2 --}}
    <main class="py-16">
        <!-- Title Section -->
        <div class="text-center">
            <h2 class="text-5xl font-extrabold text-gray-800">Categories of The Month</h2>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Categories Section -->
        <div class="flex flex-col md:flex-row justify-center mt-16 space-y-12 md:space-y-0 md:space-x-12">
            <!-- Watches -->
            <div class="text-center">
                <div class="w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full overflow-hidden shadow-lg">
                    <img src="{{ asset('clothes/gorraarbol.png') }}" alt="Watches"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl md:text-2xl font-semibold text-gray-700">Watches</h3>
                <a href="#"
                    class="mt-4 inline-block bg-green-600 text-white font-medium py-2 md:py-3 px-4 md:px-6 rounded-lg transition duration-300 hover:bg-green-700">Go
                    Shop</a>
            </div>

            <!-- Shoes -->
            <div class="text-center">
                <div class="w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full overflow-hidden shadow-lg">
                    <img src="{{ asset('clothes/spajaro.png') }}" alt="Shoes" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl md:text-2xl font-semibold text-gray-700">Shoes</h3>
                <a href="#"
                    class="mt-4 inline-block bg-green-600 text-white font-medium py-2 md:py-3 px-4 md:px-6 rounded-lg transition duration-300 hover:bg-green-700">Go
                    Shop</a>
            </div>

            <!-- Accessories -->
            <div class="text-center">
                <div class="w-40 h-40 md:w-56 md:h-56 mx-auto rounded-full overflow-hidden shadow-lg">
                    <img src="{{ asset('clothes/star.png') }}" alt="Accessories" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl md:text-2xl font-semibold text-gray-700">Accessories</h3>
                <a href="#"
                    class="mt-4 inline-block bg-green-600 text-white font-medium py-2 md:py-3 px-4 md:px-6 rounded-lg transition duration-300 hover:bg-green-700">Go
                    Shop</a>
            </div>
        </div>
    </main>

    {{-- seccion numero 3 --}}
    <main class="numero3 container mx-auto py-12">
        <h2 class="text-4xl font-bold text-purple-500 text-center mb-4">Featured Product</h2>
        <p class="text-center text-purple-400 mb-12">Reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Producto 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('clothes/toji.png') }}" alt="" class="w-full h-auto">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="ml-auto text-purple-400 font-semibold">$240.00</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Gym Weight</h3>
                    <p class="text-purple-400 text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sunt in culpa qui officia deserunt.</p>
                    <p class="text-purple-400 text-sm">Reviews (24)</p>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('clothes/eva.png') }}" alt="Cloud Nike Shoes" class="w-full h-auto">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="ml-auto text-purple-400 font-semibold">$480.00</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Cloud Nike Shoes</h3>
                    <p class="text-purple-400 text-sm mb-2">Acenean gravida dignissim finibus. Nullam ipsum diam,
                        posuere vitae pharetra sed.</p>
                    <p class="text-purple-400 text-sm">Reviews (48)</p>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('clothes/vangoh.png') }}" alt="Summer Addides Shoes" class="w-full h-auto">
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="ml-auto text-purple-400 font-semibold">$360.00</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Summer Addides Shoes</h3>
                    <p class="text-purple-400 text-sm mb-2">Curabitur ac mi sit amet diam luctus porta. Phasellus
                        pulvinar sagittis diam, et scelerisque ipsum lobortis nec.</p>
                    <p class="text-purple-400 text-sm">Reviews (72)</p>
                </div>
            </div>
        </div>
    </main>

    {{-- aqui va el pie de pagina  --}}
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                        <p>Moda Express</p>
                    </span>
                </a>
                <ul
                    class="flex flex-col sm:flex-row sm:flex-wrap sm:items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li class="mb-2 sm:mb-0">
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li class="mb-2 sm:mb-0">
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li class="mb-2 sm:mb-0">
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li class="mb-2 sm:mb-0">
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <script>
        // Script para el menu principal
        document.getElementById('boton-menu').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });

        // Scripts para el menu movil
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.remove('hidden');
        });

        document.getElementById('close-mobile-menu').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    </script>
    </body>

</html>
