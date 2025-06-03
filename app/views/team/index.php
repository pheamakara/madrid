<?php
$title = 'Real Madrid Squad - Madrid KH';
$description = 'View the full Real Madrid squad with player profiles and statistics.';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
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
            <h1 class="text-3xl md:text-4xl font-bold mb-8 text-center">Real Madrid Squad</h1>
            
            <?php foreach ($playersByPosition as $position => $players): ?>
                <div class="mb-12">
                    <h2 class="text-2xl font-bold mb-6 pb-2 border-b border-rm-gold"><?= $position ?></h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <?php foreach ($players as $player): ?>
                            <a href="/team/player/<?= $player['id'] ?>" class="glass rounded-xl overflow-hidden shadow-lg transform transition hover:-translate-y-1 hover:shadow-xl">
                                <div class="bg-gray-200 border-2 border-dashed w-full h-48"></div>
                                <div class="p-4">
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold"><?= $player['name'] ?></h3>
                                        <span class="text-rm-gold font-bold"><?= $player['jersey_number'] ?></span>
                                    </div>
                                    <p class="text-gray-300 mt-1"><?= $player['nationality'] ?></p>
                                    <div class="mt-3 flex justify-between text-sm">
                                        <?php if ($position === 'Goalkeepers'): ?>
                                            <span>Apps: <?= $player['appearances'] ?></span>
                                            <span>Clean Sheets: <?= $player['clean_sheets'] ?></span>
                                        <?php else: ?>
                                            <span>Apps: <?= $player['appearances'] ?></span>
                                            <span>Goals: <?= $player['goals'] ?? 0 ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include(APP_ROOT . '/app/views/partials/footer.php') ?>
</body>
</html>
