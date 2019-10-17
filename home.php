<!DOCTYPE html>
<?php
  $archivo = file_get_contents('database/productos.json');
  $productos = json_decode($archivo, true);
 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
      require_once('parts/header.php')
     ?>
     <main>
       <div class="banner">
         <!-- <img src="img/banner.jpg" alt="Laptop"> -->
       </div>
       <div class="productos">
         <?php foreach ($productos as $producto) {?>
         <a class="linkProducto" href="#">
           <div class="producto">
             <div class="imgProducto">
               <img src=<?= $producto['imgProducto']?>>
             </div>
             <div class="textoProducto">
               <div class="precio">
                 <span>$ <?= $producto['precio']?></span>
               </div>
               <div class="descripcion">
                 <small><?= $producto['descripcion']?></small>
               </div>
             </div>
           </div>
         </a>
       <?php } ?>
       </div>
     </main>
     <?php
     require_once('parts/footer.php');
      ?>




<?php

require_once('parts/scripts.php');

 ?>
  </body>
</html>
