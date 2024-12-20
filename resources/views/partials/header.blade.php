<nav class="p-4 bg-blue-700">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 ">
        <div class="relative flex items-center justify-between h-16">
            <!-- Left side: Program Title -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                    <!-- Mobile menu button goes here if needed -->
                </button>
            </div>
            <div class="flex-1 md:flex hidden  items-center justify-start sm:justify-start">
                <span class="text-white text-2xl font-bold">{{ config('app.name', 'Laravel') }}</span>
            </div>

            <!-- Right side: Search Bar, Dark Mode, Language Selector -->
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <input type="text" class="px-4 py-2 rounded-lg bg-slate-200  focus:outline-none"
                    placeholder="{{ __('Search...') }}" />

                <!-- Dark/Light Mode Toggle -->
                <button id="theme-toggle" type="button"
                    class="text-gray-500 md:flex hidden  dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                </button>

                <button id="filter-button" type="button"
                    class="text-white dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4  focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                        <path d="M7.25 13.25V7.5h1.5v5.75a.75.75 0 0 1-1.5 0ZM8.75 2.75V5h.75a.75.75 0 0 1 0 1.5h-3a.75.75 0 0 1 0-1.5h.75V2.75a.75.75 0 0 1 1.5 0ZM2.25 9.5a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5H4.5V2.75a.75.75 0 0 0-1.5 0V9.5h-.75ZM10 10.25a.75.75 0 0 1 .75-.75h.75V2.75a.75.75 0 0 1 1.5 0V9.5h.75a.75.75 0 0 1 0 1.5h-3a.75.75 0 0 1-.75-.75ZM3 12v1.25a.75.75 0 0 0 1.5 0V12H3ZM11.5 13.25V12H13v1.25a.75.75 0 0 1-1.5 0Z" />
                      </svg>
                      
                </button>

                <!-- Language Selector -->
                <div class="relative group">
                    <!-- Button to toggle dropdown -->
                    <button class="text-white focus:outline-none">
                        {{ app()->getLocale() == 'id' ? 'ID' : 'EN' }}
                    </button>
                    <!-- Dropdown menu -->
                    <div
                        class="absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700"
                            onclick="changeLanguage('en')">English</button>
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700"
                            onclick="changeLanguage('id')">Indonesia</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Dark Mode Toggle
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeIcon = document.getElementById('dark-mode-icon');
    const currentTheme = localStorage.getItem('theme');

    // Set the initial theme based on localStorage or system preference
    if (currentTheme === 'dark' || (!currentTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark'); // Aktifkan dark mode
        darkModeIcon.textContent = 'light_mode'; // Tampilkan ikon light mode
    } else {
        document.documentElement.classList.remove('dark'); // Hapus dark mode
        darkModeIcon.textContent = 'dark_mode'; // Tampilkan ikon dark mode
    }

    // Toggle Dark Mode
    darkModeToggle.addEventListener('click', () => {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            darkModeIcon.textContent = 'dark_mode'; // Ikon dark mode
            localStorage.setItem('theme', 'light'); // Simpan preferensi ke light
        } else {
            document.documentElement.classList.add('dark');
            darkModeIcon.textContent = 'light_mode'; // Ikon light mode
            localStorage.setItem('theme', 'dark'); // Simpan preferensi ke dark
        }
    });

    // Language Change
    function changeLanguage(language) {
        const currentUrl = window.location.pathname.split('/');
        const newUrl = '/' + language + currentUrl.slice(1).join('/');
        window.location.href = newUrl;
    }
</script>
