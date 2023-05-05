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
  new Accessory( 'Collare Trixie', 9.99, 'https://shop-cdn-m.mediazs.com/bilder/collare/per/gatti/my/home/5/400/icon_topseller_1_2021_12_23t163010_904_5.jpg', $categories['gatto']),
  new Accessory( 'Ciotola Savic', 5.49, 'https://shop-cdn-m.mediazs.com/bilder/doppia/ciotola/savic/delice/double/marble/7/400/252331_pla_savic_futternapf_delice_doublemarble_hs_01_7.jpg', $categories['gatto']),
  new Accessory('Pettorina Julius', 39.99, 'https://shop-cdn-m.mediazs.com/bilder/pettorina/juliusk/power/antracite/8/400/69285_pla_julius_k9_powergeschirr_anthrazit_hs_01_8.jpg', $categories['cane']),
  new Accessory( 'Cuscino Be Nordic Trixie', 80.99, 'https://shop-cdn-m.mediazs.com/bilder/cuscino/per/cani/trixie/fhr/be/nordic/0/400/211498_211499_pla_trixie_benordic_kissen_foehr_hs_01_0.jpg', $categories['cane']),
];
    
  

$toy = [
  new Toy( 'Osso Grosso PlayDog',  8.29, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/nylabone/osso/annodato/al/gusto/di/manzo/1/400/225398_pla_nylabone_rohhautknochen_rindfleischgeschmack_hs_04_1.jpg', $categories['cane']),
  new Toy( 'Elefantina Elma', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/elma/in/lattice/7/400/249596_elma_fg_1828_7.jpg', $categories['cane']),
  new Toy('Corda Limoen', 2.99, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/limoen/osso/8/400/217894_pla_limoen_bone_fg_0038_8.jpg', $categories['cane']),
  new Toy('Turning Feather Trixie', 15.29, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/trixie/turning/feather/8/400/74762_pla_trixie_katzenspielzeug_turning_feather_grau_hs_05_8.jpg', $categories['gatto']),
];
