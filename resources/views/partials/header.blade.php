<nav class="p-4">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Left side: Program Title -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                    <!-- Mobile menu button goes here if needed -->
                </button>
            </div>
            <div class="flex-1 flex items-center justify-start sm:justify-start">
                <span class="text-white text-2xl font-bold">{{ config('app.name', 'Laravel') }}</span>
            </div>

            <!-- Right side: Search Bar, Dark Mode, Language Selector -->
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <input type="text" class="px-4 py-2 rounded-lg focus:outline-none"
                    placeholder="{{ __('Search...') }}" />

                <!-- Dark/Light Mode Toggle -->
                <button id="dark-mode-toggle" class="text-gray-300 hover:text-white focus:outline-none">
                    <span id="dark-mode-icon" class="material-icons">dark_mode</span>
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
