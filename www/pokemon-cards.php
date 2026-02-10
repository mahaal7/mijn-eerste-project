<?php
include 'database.php';

$sql = "SELECT * FROM pokemon"; // SQL query om alle pokemon uit de database te halen
$result = mysqli_query($conn, $sql);

$cards = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach($cards as $card):

    echo $card["id"];
    echo $card["name"];
    echo $card["type"];

endforeach;

?>

<?php
// Loop door alle pokemon uit de database
foreach($pokemon_cards as $pokemon_card) {
    echo '<div class="pokemon-card">';
    echo '<h2>' . $pokemon_card['name'] . '</h2>';
    echo '<p>' . $pokemon_card['type'] . '</p>';
    echo '<img src="' . $pokemon_card['pokedex_number'] . '" alt="' . $pokemon_card['name'] . '">';
    echo '</div>';
}

?>