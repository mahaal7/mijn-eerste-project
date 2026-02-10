<<?php
$menuItems = [
    'home' => 'index.php',
    'about' => 'about.php',
    'contact' => 'contact.php',
    'service' => 'service.php',
    'maha' => 'maha.php',
    'socials '=> 'socials.php'
];
?>
<?php foreach ($menuItems as $sleutels => $waarde): ?>
    <a href="<?php echo $waarde; ?>">
        <?php echo $sleutels; ?>
    </a>
<?php endforeach; ?>

  <?php include 'socials.php'; ?>
  
<!-- Navigatie -->
<ul class="flex space-x-6">
    <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
    <li><a href="about.php" class="text-gray-300 hover:text-white">Over mij</a></li>
    <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
    <li><a href="service.php" class="text-gray-300 hover:text-white">Service</a></li>
    <li><a href="maha.php" class="text-gray-300 hover:text-white">Maha</a></li>
    <li><a href="socials.php" class="text-gray-300 hover:text-white">socials</a></li>
</ul> 