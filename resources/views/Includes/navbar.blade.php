<nav class="bg-white border-b border-gray-200 dark:bg-gray-900 h-20  top-0 w-full z-50 shadow-sm">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="home" class="flex items-center space-x-3 text-white">
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M12 2C7.589 2 4 5.589 4 10s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0 14c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3zm8.354-8.354a.5.5 0 10-.708.708l.354.354H18a1 1 0 00-1 1v4a1 1 0 001 1h.5l-.354.354a.5.5 0 10.708.708l1.646-1.646a.5.5 0 000-.708L18.354 7.646z" />
            </svg>
            <span class="text-2xl font-bold">Flah</span> </a>

        <!-- Mobile menu toggle -->
        <button id="menu-toggle" type="button"
            class="md:hidden flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-8 items-center" id="navbar-default">
            <a href="/"
                class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Accueil</a>
            <a href="{{ route('produit.new') }}"
                class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Produits</a>
            <a href="Veterinarian"
                class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Vétérinaire</a>
            <a href="about"
                class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">À
                propos</a>
            <a href="contact"
                class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Contact</a>

            <!-- Login Button -->
            <a href="{{ route('login') }}"
                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Connexion</a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden w-full bg-white dark:bg-gray-800" id="mobile-menu">
        <ul class="flex flex-col space-y-2 p-4">
            <li><a href="/"
                    class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Accueil</a>
            </li>
            <li><a href="{{ route('produit.new') }}"
                    class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Produits</a>
            </li>
            <li><a href="Veterinarian"
                    class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Vétérinaire</a>
            </li>
            <li><a href="about"
                    class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">À
                    propos</a></li>
            <li><a href="contact"
                    class="text-gray-700 dark:text-white hover:text-green-600 dark:hover:text-green-400 transition">Contact</a>
            </li>
            <li><a href="{{ route('login') }}"
                    class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition text-center">Connexion</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>