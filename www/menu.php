<!-- <?php
$menuItems = [
    'home' => 'index.php',
    'about' => 'about.php',
    'contact' => 'contact.php',
    'service' => 'service.php'
];
?>
<?php foreach ($menuItems as $key => $value): ?>
    <a href="<?php echo $value; ?>">
        <?php echo $key; ?>
    </a>
<?php endforeach; ?> -->

<!-- Navigatie -->
<ul class="flex space-x-6">
    <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
    <li><a href="about.php" class="text-gray-300 hover:text-white">Over mij</a></li>
    <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
    <li><a href="service.php" class="text-gray-300 hover:text-white">Service</a></li>
</ul> 