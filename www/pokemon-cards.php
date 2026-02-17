<?php
include 'database.php';

$sql = "SELECT * FROM cards"; // SQL query om alle pokemon uit de database te halen
$result = mysqli_query($conn, $sql);

$cards = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($cards as $card):
?>
      <!-- Pokemon Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/<?php echo $card['pokedex_number']; ?>.png" alt="Charmander"
                        class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2"><?php echo $card['name'];?> </h3>
                        <p class="text-gray-600 mb-4"><?php echo $card ['type']; ?></p>
                        <a href="#" class="text-blue-600 hover:text-blue-800">Meer informatie →</a>
                    </div>
                </div>

<?php endforeach; ?>

