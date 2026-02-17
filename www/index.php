<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Verzameling</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-bold">Pokédex</div>
            <?php include 'menu.php'; ?>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="w-full">
        <!-- Hero Section -->
        <div class="bg-blue-600 text-white py-20 px-8">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl font-bold mb-4">Mijn Pokémon Verzameling</h1>
                <p class="text-xl">Ontdek de wonderlijke wereld van Pokémon en bekijk mijn uitgebreide collectie!</p>
            </div>
        </div>

        
    <div class="grid grid -cols-1 md: grid -cols-2 lg:grid-cols-3 gap-8">
    <?php include 'pokemon-cards.php'; ?>

    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-xl font-bold mb-4">Over Ons</h4>
                <p class="text-gray-400">Wij zijn gepassioneerde Pokémon verzamelaars die onze liefde voor deze
                    geweldige wezens willen delen met de wereld.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-4">Snelle Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Verzameling</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>

                <?php include 'socials.php'; ?>

                <h4 class="text-xl font-bold mb-4">Contact</h4>
                <p class="text-gray-400">Email: info@pokemon-verzameling.nl</p>
                <p class="text-gray-400">Tel: +31 (0)6 12345678</p>
                <p class="text-gray-400">Locatie: Amsterdam, Nederland</p>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>