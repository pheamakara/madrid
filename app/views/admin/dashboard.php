<?php
$title = 'Admin Dashboard - Madrid KH';
?>

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="h-full bg-gray-100">
    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="w-64 bg-rm-blue text-white h-full">
            <div class="p-4 border-b border-blue-800">
                <h1 class="text-xl font-bold">Madrid KH Admin</h1>
            </div>
            <nav class="mt-4">
                <a href="/admin/dashboard" class="block py-2 px-4 bg-blue-800 text-white">
                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a href="/admin/posts" class="block py-2 px-4 hover:bg-blue-800 transition">
                    <i class="fas fa-newspaper mr-2"></i> Posts
                </a>
                <a href="#" class="block py-2 px-4 hover:bg-blue-800 transition">
                    <i class="fas fa-users mr-2"></i> Users
                </a>
                <a href="#" class="block py-2极x-4 hover:bg-blue-800 transition">
                    <i class="fas fa-cog mr-2"></i> Settings
                </a>
                <a href="/admin/logout" class="block py-2 px-4 hover:bg-blue-800 transition">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <div class="bg-white shadow-sm">
                <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                    <h2 class="text-2xl font-bold">Dashboard</h2>
                    <div class="text-sm">Welcome, Admin</div>
                </div>
            </div>

            <div class="container mx-auto px-4 py-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Stats Card 1 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 bg-blue-100 rounded-full mr-4">
                                <i class="fas fa-newspaper text-rm-blue text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Total Posts</h3>
                                <p class="text-3xl font-bold">42</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Card 2 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 bg-green-100 rounded-full mr-4">
                                <i class="fas fa-users text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Total Users</h3>
                                <p class="text-3xl font-bold">15</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Card 3 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 bg-yellow-100 rounded-full mr-4">
                                <i class="fas fa-comments text-yellow-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Comments</h3>
                                <p class="text-3xl font-bold">128</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow mt-6 p-6">
                    <h3 class="text-xl font-bold mb-4">Recent Activity</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center border-b pb-3">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                            <div class="ml-4">
                                <h4 class="font-bold">New post published</h4>
                                <p class="text-gray-600">Match Report: Real Madrid vs Barcelona</p>
                                <span class="text-sm text-gray-400">2 hours ago</span>
                            </div>
                        </li>
                        <li class="flex items-center border-b pb-3">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                            <div class="ml-4">
                                <h4 class="font-bold">User registered</h4>
                                <p class="text-gray-600">New editor: phea.makara</p>
                                <span class="text-sm text-gray-400">5 hours ago</span>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                            <div class="ml-4">
                                <h4 class="font-bold">Fixture updated</h4>
                                <p class="text-gray-600">Added new match against Bayern Munich</p>
                                <span class="text-sm text-gray-400">Yesterday</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
