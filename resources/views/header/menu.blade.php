<header class="bg-indigo-600">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            {{-- Logo --}}
            <a href="#" class="flex items-center space-x-2 text-teal-600">
                <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41Z"
                        fill="currentColor" />
                </svg>
                <span class="font-semibold text-lg dark:text-white">MyPortfolio</span>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex items-center gap-8">
                <a href="#about"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400 transition">About</a>
                <a href="#projects"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400 transition">Projects</a>
                <a href="#services"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400 transition">Services</a>
                <a href="#blog"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400 transition">Blog</a>
                <a href="#contact"
                    class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400 transition">Contact</a>
            </nav>



            {{-- Mobile Hamburger --}}
            <button id="mobile-menu-btn"
                class="md:hidden p-2 text-gray-700 dark:text-gray-200 hover:text-indigo-600 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden border-t border-white bg-indigo-600">
        <nav class="flex flex-col space-y-4 px-6 py-4">
            <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">About</a>
            <a href="#projects" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Projects</a>
            <a href="#services" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Services</a>
            <a href="#blog" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Blog</a>
            <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600">Contact</a>

            {{-- Social Icons --}}

        </nav>
    </div>
</header>
