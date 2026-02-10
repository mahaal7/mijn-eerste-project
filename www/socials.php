<?php

    $socials = [
        'Instagram' => 'https://instagram.com/',
        'Facebook' => 'https://facebook.com/',
        'Twitter' => 'https://twitter.com/'
    ];

echo '<div class="bg-gray shadow p-4 flex justify-center space-x-6 mb-6">';


foreach($socials as $key => $value) {
     echo '<li><a href="'. $value .'" class="text-gray-700 hover:text-black">'. $key .'</a></li'; 
 }


echo ''
   
?>


<div class="bg-white shadow p-4 flex justify-center space-x-6 mb-6"> 

<?php foreach($socials as $key => $value):  ?>

    <li>

    <a href="<?php echo $value; ?>" class="text-gray-700 hover:text-black">

    <?php echo $key; ?>

     </a>
     
    </li>

    <?php endforeach; ?>

    </div>



    