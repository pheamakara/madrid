<?php
$title = 'Player Statistics - Madrid KH';
$description = 'Real Madrid player statistics, goals, assists, and ratings.';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale极=1.0">
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
            <h1 class="text-3xl md:text-4xl font-bold mb-8 text-center">Player Statistics</h1>
            
            <div class="glass rounded-xl overflow-hidden shadow-lg max-w-4xl mx-auto">
                <table class="w-full">
                    <thead class="bg-rm-blue">
                        <tr>
                            <th class="py-3 px-4 text-left">Player</th>
                            <th class="py-3 px-4 text-left">Position</th>
                            <th class="py-3 px-4">Nationality</th>
                            <th class="py-3 px-4">Apps</th>
                            <th class="py-3 px-4">Goals</th>
                            <th class="py-3 px-4">Assists</th>
                            <th class="py-3 px-4">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($players as $player): ?>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-4 flex items-center">
                                    <div class="w-10 h-10 bg-gray-200 rounded-full mr-3"></div>
                                    <span class="font-medium"><?= $player['name'] ?></span>
                                </td>
                                <td class="py-3 px-4"><?= $player['position'] ?></td>
                                <td class="py-3 px-4 text-center"><?= $player['nationality'] ?></td>
                                <td class="py-3 px-4 text-center"><?= $player['appearances'] ?></td>
                                <td class="py-3 px-4 text-center"><?= $player['goals'] ?? 'N/A' ?></td>
                                <td class="py-3 px-4 text-center"><?= $player['assists'] ?? 'N/A' ?></td>
                                <td class="py-3 px-4 text-center font-bold text-rm-gold"><?= $player['rating'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php include(APP_ROOT . '/app/views/partials/footer.php') ?>
</body>
</html>
