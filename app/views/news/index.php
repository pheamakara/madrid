<?php
$title = 'Latest News - Madrid KH';
$description = 'Stay updated with the latest Real Madrid news, match reports, transfers, and more.';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <!-- Include Tailwind CSS -->
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
    <?php include(APP_ROOT . '/app/views/partials/header.php') ?>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Main Content -->
                <div class="w-full md:w-3/4">
                    <h1 class="text-3xl md:text-4xl font-bold mb-8">Latest News</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php foreach ($articles as $article): ?>
                            <div class="glass rounded-xl overflow-hidden shadow-lg">
                                <img src="<?= $article['image'] ?>" alt="<?= htmlspecialchars($article['title']) ?>" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <span class="text-rm-gold text-sm font-medium">
                                        <?= $categories[array_search($article['category_id'], array_column($categories, 'id'))]['name'] ?>
                                    </span>
                                    <h2 class="text-xl font-bold my-2"><?= htmlspecialchars($article['title']) ?></h2>
                                    <p class="text-gray-300 mb-4"><?= htmlspecialchars($article['excerpt']) ?></p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm"><?= date('F j, Y', strtotime($article['date'])) ?></span>
                                        <a href="#" class="text-rm-gold hover:text-yellow-500">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-8 flex justify-center">
                        <?php if ($currentPage > 1): ?>
                            <a href="?page=<?= $currentPage - 1 ?>&category=<?= $currentCategory ?>" class="mr-4 px-4 py-2 bg-rm-blue text-white rounded hover:bg-blue-900 transition">
                                &larr; Previous
                            </a>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <a href="?page=<?= $i ?>&category=<?= $currentCategory ?>" class="mx-1 px-4 py-2 <?= $i == $currentPage ? 'bg-rm-gold text-rm-blue font-bold' : 'bg-rm-blue text-white' ?> rounded hover:bg-blue-900 transition">
                                <?= $i ?>
                            </a>
                        <?php endfor; ?>
                        
                        <?php if ($currentPage < $totalPages): ?>
                            <a href="?page=<?= $currentPage + 1 ?>&category=<?= $currentCategory ?>" class="ml-4 px-4 py-2 bg-rm-blue text-white rounded hover:bg-blue-900 transition">
                                Next &rarr;
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="w-full md:w-1/4">
                    <div class="glass rounded-xl p-6 mb-6">
                        <h3 class="text-xl font-bold mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="?" class="block px-3 py-2 rounded <?= !$currentCategory ? 'bg-rm-gold text-rm-blue font-medium' : 'hover:bg-gray-700' ?> transition">
                                    All Categories
                                </a>
                            </li>
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="?category=<?= $category['id'] ?>" class="block px-3 py-2 rounded <?= $currentCategory == $category['id'] ? 'bg-rm-gold text-rm-blue font-medium' : 'hover:bg-gray-700' ?> transition">
                                        <?= $category['name'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="glass rounded-xl p-6">
                        <h3 class="text-xl font-bold mb-4">Trending Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php 
                            $tags = ['Champions League', 'La Liga', 'Transfer News', 'Injury Update', 'Player Interview', 'Tactical Analysis'];
                            foreach ($tags as $tag): ?>
                                <a href="#" class="px-3 py-1 bg-rm-blue rounded-full text-sm hover:bg-blue-900 transition">
                                    #<?= $tag ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include(APP_ROOT . '/app/views/partials/footer.php') ?>
</body>
</html>
