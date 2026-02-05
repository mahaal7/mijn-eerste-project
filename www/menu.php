<?php
$menuItems = [
    'home' => 'index.php',
    'about' => 'about.php',
    'contact' => 'contact.php',
    'menu' => 'menu.php'
];
?>
<?php foreach($menuItems as $key => $value):?>
    <a href="<?php echo $value; ?>">
        <?php echo $key; ?>
    </a>
<?php endforeach; ?>
 <!-- Navigatie -->
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-bold">Pokédex</div>
            <ul class="flex space-x-6">
                <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
                <li><a href="about.php" class="text-gray-300 hover:text-white">Over mij</a></li>
                <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
                <li><a href="menu.php" class="text-gray-300 hover:text-white">Menu</a></li>
            </ul>
        </div>
    </nav>