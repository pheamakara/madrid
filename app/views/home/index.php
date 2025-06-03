<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'rm-blue': '#0c2c5c',
                        'rm-gold': '#FEBE10',
                    }
                }
            }
        }
    </script>
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hero-bg {
            background: linear-gradient(rgba(12, 44, 92, 0.8), rgba(12, 44, 92, 0.9)), url('https://images.unsplash.com/photo-1575361204480-aadea25e6e68?q=80&w=2071&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .scrollbar-custom {
            scrollbar-width: thin;
            scrollbar-color: #FEBE10 #0c2c5c;
        }
        .scrollbar-custom::-webkit-scrollbar {
            width: 8px;
        }
        .scrollbar-custom::-webkit-scrollbar-thumb {
            background-color: #FEBE10;
            border-radius: 4px;
        }
        .scrollbar-custom::-webkit-scrollbar-track {
            background: #0c2c5c;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 scrollbar-custom">
    <!-- Navigation -->
    <nav class="bg-rm-blue text-white sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-futbol text-rm-gold text-2xl"></i>
                <h1 class="text-2xl font-bold">Madrid KH</h1>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-rm-gold transition">Home</a>
                <a href="#" class="hover:text-rm-gold transition">News</a>
                <a href="#" class="hover:text-rm-gold transition">Matches</a>
                <a href="#" class="hover:text-rm-gold transition">Team</a>
                <a href="#" class="hover:text-rm-gold transition">About</a>
                <a href="#" class="hover:text-rm-gold transition">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-rm-gold text-rm-blue px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition">
                    <i class="fa-solid fa-user mr-2"></i>Login
                </button>
                <div class="flex space-x-2">
                    <button class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center">EN</button>
                    <button class="w-8 h-8 rounded-full bg-rm-gold text-rm-blue flex items-center justify-center">KM</button>
                </div>
            </div>
            <button class="md:hidden text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">HALA MADRID!</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">The home of Real Madrid supporters in Cambodia</p>
            <div class="flex justify-center space-x-4">
                <button class="bg-rm-gold text-rm-blue px-6 py-3 rounded-full font-bold hover:bg-yellow-500 transition">
                    Latest News <i class="fa-solid fa-arrow-right ml-2"></i>
                </button>
                <button class="glass px-6 py-3 rounded-full font-bold border border-rm-gold text-rm-gold hover:bg-rm-gold hover:text-rm-blue transition">
                    Upcoming Matches
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Latest News</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- News Card 1 -->
                <div class="glass rounded-xl overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400x250" alt="News" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-rm-gold text-sm font-medium">Match Report</span>
                        <h3 class="text-xl font-bold my-2">Real Madrid Wins Champions League</h3>
                        <p class="text-gray-300 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">June 3, 2025</span>
                            <a href="#" class="text-rm-gold hover:text-yellow-500">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <!-- News Card 2 -->
                <div class="glass rounded-xl overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400x250" alt="News" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-rm-gold text-sm font-medium">Transfer News</span>
                        <h3 class="text-xl font-bold my-2">New Star Signing Announced</h3>
                        <p class="text-gray-300 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm">June 2, 2025</span>
                            <a href="#" class="text-rm-gold hover:text-yellow-500">Read More →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Upcoming Match -->
                <div class="glass rounded-xl overflow-hidden shadow-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4 text-center">Upcoming Match</h3>
                        <div class="flex justify-between items-center mb-6">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-2"></div>
                                <span class="font-medium">Real Madrid</span>
                            </div>
                            <div class="text-2xl font-bold">VS</div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-2"></div>
                                <span class="font-medium">FC Barcelona</span>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <p class="text-lg font-semibold">La Liga</p>
                            <p class="text-gray-300">June 10, 2025 | 20:00 CET</p>
                            <p class="text-gray-300">Santiago Bernabéu Stadium</p>
                        </div>
                        <button class="w-full bg-rm-gold text-rm-blue py-2 rounded-md font-bold hover:bg-yellow-500 transition">
                            View Match Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- League Table Snippet -->
    <section class="py-12 bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">La Liga Standings</h2>
            <div class="glass max-w-2xl mx-auto rounded-xl overflow-hidden">
                <table class="w-full">
                    <thead class="bg-rm-blue">
                        <tr>
                            <th class="py-3 px-4 text-left">Position</th>
                            <th class="py-3 px-4 text-left">Team</th>
                            <th class="py-3 px-4">Played</th>
                            <th class="py-3 px-4">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-700">
                            <td class="py-3 px-4 font-bold text-rm-gold">1</td>
                            <td class="py-3 px-4 flex items-center">
                                <div class="w-6 h-6 bg-gray-200 rounded-full mr-2"></div>
                                Real Madrid
                            </td>
                            <td class="py-3 px-4 text-center">38</td>
                            <td class="py-3 px-4 text-center font-bold">92</td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4 flex items-center">
                                <div class="w-6 h-6 bg-gray-200 rounded-full mr-2"></div>
                                FC Barcelona
                            </td>
                            <td class="py-3 px-4 text-center">38</td>
                            <td class="py-3 px-4 text-center">85</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">3</td>
                            <td class="py-3 px-4 flex items-center">
                                <div class="w-6 h-6 bg-gray-200 rounded-full mr-2"></div>
                                Atlético Madrid
                            </td>
                            <td class="py-3 px-4 text-center">38</td>
                            <td class="py-3 px-4 text-center">78</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center py-4">
                    <a href="#" class="text-rm-gold hover:text-yellow-500 font-medium">
                        View Full Table <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-rm-blue text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Madrid KH</h3>
                    <p class="text-gray-300 mb-4">Your source for Real Madrid news in Cambodia</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl text-rm-gold hover:text-yellow-500"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl text-rm-gold hover:text-yellow-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl text-rm-gold hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl text-rm-gold hover:text-yellow-500"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Home</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">News</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Match Center</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Team</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Match Reports</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Transfers</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">History</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Youth Team</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-rm-gold transition">Women's Team</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-start">
                            <i class="fa-solid fa-map-marker-alt text-rm-gold mt-1 mr-2"></i>
                            <span>Phnom Penh, Cambodia</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-envelope text-rm-gold mt-1 mr-2"></i>
                            <span>info@madridkh.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-phone text-rm-gold mt-1 mr-2"></i>
                            <span>+855 12 345 678</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; <?= date('Y') ?> Madrid KH - Real Madrid Cambodia Fan Site. All rights reserved.</p>
                <p class="mt-2">madridkh.com - The home of Real Madrid supporters in Cambodia</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu -->
    <script>
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
</body>
</html>
