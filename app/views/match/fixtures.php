<?php
$title = 'Fixtures & Results - Madrid KH';
$description = 'Real Madrid fixtures, results, and match details.';
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
                        'rm-blue': '#0c极2c5c',
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
            <h1 class="text-3xl md:text-4xl font-bold mb-8 text-center">Fixtures & Results</h1>
            
            <div class="glass rounded-xl overflow-hidden shadow-lg max-w-4xl mx-auto">
                <table class="w-full">
                    <thead class="bg-rm-blue">
                        <tr>
                            <th class="py-3 px-4 text-left">Date</th>
                            <th class="py-3 px-4 text-left">Match</th>
                            <th class="py-3 px-4">Competition</th>
                            <th class="py-3 px-4">Venue</th>
                            <th class="py-3 px-4">Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fixtures as $fixture): ?>
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-4">
                                    <?= date('M j, Y', strtotime($fixture['date'])) ?><br>
                                    <span class="text-sm text-gray-400"><?= date('H:i', strtotime($fixture['date'])) ?></span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-gray-200 rounded-full"></div>
                                        <span><?= $fixture['home_team'] ?></span>
                                    </div>
                                    <div class="flex items-center space-x-2 mt-2">
                                        <div class="w-6 h-6 bg-gray-200 rounded-full"></div>
                                        <span><?= $fixture['away_team'] ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-center"><?= $fixture['competition'] ?></td>
                                <td class="py-3 px-4 text-center"><?= $fixture['venue'] ?></td>
                                <td class="py-3 px-4 text-center">
                                    <?php if ($fixture['status'] === 'completed'): ?>
                                        <span class="text-lg font-bold"><?= $fixture['home_score'] ?> - <?= $fixture['away_score'] ?></span>
                                        <div class="text-sm text-gray-400">FT</div>
                                    <?php else: ?>
                                        <span class="text-rm-gold">VS</span>
                                    <?php endif; ?>
                                </td>
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
