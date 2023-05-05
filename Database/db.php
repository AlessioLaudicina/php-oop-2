<?php

$categories = [
  'cane' => new Category('Cane','<i class="fa-solid fa-dog"></i>'),
  'gatto' => new Category('Gatto','<i class="fa-solid fa-cat"></i>'),
];
$products = [];
$food = [
    new Food( 'Natural Trainer', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/light/in/fat/mini/adult/con/tacchino/2/800/nuovo_progetto_32__2.jpg', $categories['cane'], true, 20, 7, ['carne, yucca, spirulina', 'tacchino'], 'tacchino'),
];
$accessory = [];
$toy = [];
