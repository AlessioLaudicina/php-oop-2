<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria 
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
-->

<?php 
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accesory.php';
require_once __DIR__ . '/Models/Toys.php';
require __DIR__ . '/Database/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Animal Shop</title>
</head>
<body>
    <style> img{max-height: 200px;}</style>
<header class="bg-dark text-white p-5 text-center"> 
    <h1>Animal Shop</h1>  
  </header>

  <div class="container">
  <h3>Alimenti</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Categoria</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Immagine del prodotto</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($food as $item): ?>
          <tr>
            <td><?php echo $item->name ?></td>
            <td><?php echo $item->category->icon ?></td>
            
            <td>
          
                <p><?php echo $item->price ?>€</p>
             
            </td>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>"></td>
          </tr>
          <?php endforeach; ?>
        
      </tbody>
    
    </table>

    <h3>Gioccatoli</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Categoria</th>
          
          <th scope="col">Prezzo</th>
          <th scope="col">Immagine del prodotto</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($toy as $item): ?>
          <tr>
            <td><?php echo $item->name?></td>
            <td><?php echo $item->category->icon ?></td>
            <td><?php echo $item->price ?></td>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>"></td>
            
            <?php endforeach; ?>
      
        
        
      </tbody>
    
    </table>

    <h3>Accessori</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Categoria</th>
          
          <th scope="col">Prezzo</th>
          <th scope="col">Immagine del prodotto</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($accessory as $item): ?>
          <tr>
            <td><?php echo $item->name?></td>
            <td><?php echo $item->category->icon?></td>
            <td><?php echo $item->price ?></td>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>"></td>
            
            <?php endforeach; ?>
      
      
      </tbody>
    
    </table>
  </div>

    
</body>
</html>



