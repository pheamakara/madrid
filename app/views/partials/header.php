<nav class="bg-rm-blue text-white sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <i class="fa-solid fa-futbol text-rm-gold text-2xl"></i>
            <h1 class="text-2xl font-bold">Madrid KH</h1>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="/" class="hover:text-rm-gold transition">Home</a>
            <a href="/news" class="hover:text-rm-gold transition">News</a>
            <div class="relative group">
                <button class="hover:text-rm-gold transition flex items-center">
                    Matches <i class="fas fa-caret-down ml-1"></i>
                </button>
                <div class="absolute hidden group-hover:block bg-rm-blue rounded shadow-lg py-2 w-48 mt-2">
                    <a href="/matches/fixtures" class="block px-4 py-2 hover:bg-rm-gold hover:text-rm-blue transition">Fixtures & Results</a>
                    <a href="/matches/stats" class="block px-4 py-2 hover:bg-rm-gold hover:text-rm-blue transition">Player Stats</a>
                </div>
            </div>
            <a href="/team" class="hover:text-rm-gold transition">Team</a>
            <a href="/about" class="hover:text-rm-gold transition">About</a>
            <a href="/contact" class="hover:text-rm-gold transition">Contact</a>
        </div>
        <div class="flex items-center space-x-4">
            <?php if (strpos($_SERVER['REQUEST_URI'], '/admin') === 0): ?>
                <a href="/admin/login" class="bg-rm-gold text-rm-blue px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition">
                    <i class="fa-solid fa-user mr-2"></i>Admin
                </a>
            <?php endif; ?>
            <div class="flex space-x-2">
                <a href="/language/switch/en" class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center">EN</a>
                <a href="/language/switch/km" class="w-8 h-8 rounded-full bg-rm-gold text-rm-blue flex items-center justify-center">KM</a>
            </div>
            <button id="dark-mode-toggle" class="p-2 rounded-full bg-rm-blue text-rm-gold">
                <i class="fas fa-moon"></i>
            </button>
        </div>
        <button class="md:hidden text-2xl">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

<script>
    // Dark mode toggle
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeIcon = darkModeToggle.querySelector('i');

    // Check for saved preference or system preference
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const savedMode = localStorage.getItem('dark-mode');
    const isDark = savedMode ? savedMode === 'true' : prefersDark;

    // Update the UI and set the initial mode
    if (isDark) {
        document.documentElement.classList.add('dark');
        darkModeIcon.classList.remove('fa-moon');
        darkModeIcon.classList.add('fa-sun');
    } else {
        document.documentElement.classList.remove('dark');
    }

    // Toggle dark mode
    darkModeToggle.addEventListener('click', () => {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('dark-mode', isDark);
        darkModeIcon.classList.toggle('fa-moon');
        darkModeIcon.classList.toggle('fa-sun');
    });

    // Simple mobile menu toggle
    document.querySelector('.fa-bars').addEventListener('click', function() {
        const menu = document.querySelector('.md\\:flex');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        menu.classList.toggle('flex-col');
        menu.classList.toggle('absolute');
        menu.classList.toggle('top-16');
        menu.classList.toggle('left-0');
        menu.classList.toggle('w-full');
        menu.classList.toggle('bg-rm-blue');
        menu.classList.toggle('p-4');
    });
</script>
