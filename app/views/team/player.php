<?php
$title = $player['name'] . ' - Madrid KH';
$description = 'Player profile and statistics for ' . $player['name'];
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
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/3">
                        <div class="glass rounded-xl overflow-hidden shadow-lg">
                            <div class="bg-gray-200 border-2 border-dashed w-full h-64"></div>
                            <div class="p-6 text-center">
                                <h1 class="text-3xl font-bold"><?= $player['name'] ?></h1>
                                <p class="text-xl text-rm-gold mt-2">#<?= $player['jersey_number'] ?> | <?= $player['position'] ?></p>
                                <p class="mt-4"><i class="fas fa-flag mr-2"></i><?= $player['nationality'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-2/3">
                        <div class="glass rounded-xl shadow-lg p-6">
                            <h2 class="text-2xl font-bold mb-6">Player Statistics</h2>
                            
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="bg-rm-blue p-4 rounded-lg text-center">
                                    <div class="text-3xl font-bold"><?= $player['appearances'] ?></div>
                                    <div class="text-sm mt-1">Appearances</div>
                                </div>
                                
                                <?php if (isset($player['goals'])): ?>
                                    <div class="bg-rm-blue p-4 rounded-lg text-center">
                                        <div class="text-3xl font-bold"><?= $player['goals'] ?></div>
                                        <div class="text-sm mt-1">Goals</div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if (isset($player['assists'])): ?>
                                    <div class="bg-rm-blue p-4 rounded-lg text-center">
                                        <div class="text-3xl font-bold"><?= $player['assists'] ?></div>
                                        <div class="text-sm mt-1">Assists</div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if (isset($player['clean_sheets'])): ?>
                                    <div class="bg-rm-blue p-4 rounded-lg text-center">
                                <div class="text-3xl font-bold"><?= $player['clean_sheets'] ?></div>
                                        <div class="text-sm mt-1">Clean Sheets</div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="mt-8">
                                <h3 class="text-xl font-bold mb-4">Biography</h3>
                                <p class="text-gray-300">
                                    <?= $player['name'] ?> is a professional footballer who plays as a <?= $player['position'] ?> 
                                    for Real Madrid and the <?= $player['nationality'] ?> national team. Known for his exceptional 
                                    skills and dedication, he has become a key player for the club.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include(APP_ROOT . '/app/views/partials/footer.php') ?>
</body>
</html>
