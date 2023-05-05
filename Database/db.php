<?php

$categories = [
  'cane' => new Category('Cane','<i class="fa-solid fa-dog"></i>'),
  'gatto' => new Category('Gatto','<i class="fa-solid fa-cat"></i>'),
];
$products = [];
$food = [
    new Food( 'Natural Trainer', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/light/in/fat/mini/adult/con/tacchino/2/800/nuovo_progetto_32__2.jpg', $categories['cane']),
    new Food('Monge', 51.99,'https://shop-cdn-m.mediazs.com/bilder/hills/science/plan/adult/medium/con/agnello/e/riso/2/400/nuovo_progetto_2022_07_19t144419_721_2.jpg', $categories['cane']),
    new Food( 'Almo Nature', 8.98,'https://shop-cdn-m.mediazs.com/bilder/almo/nature/hfc/adult/sterilised/pollo/fresco/crocchette/per/gatti/8/400/288355_pla_almonature_hfc_adult_sterilized_huhn_300g_hs_01_8.jpg', $categories['gatto']),
];
$accessory = [
    
  
];
$toy = [];
