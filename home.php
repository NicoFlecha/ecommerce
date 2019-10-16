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
         <div class="producto">
           <div class="imgProducto">
             <img src=<?= $producto['imgProducto']?>>
           </div>
         </div>
       <?php } ?>
       </div>
     </main>






     <script src="js/headroom.min.js"></script>
     <script src="js/jquery-3.4.1.min.js"></script>
     <script src="js/header.js"></script>
     <script src="https://kit.fontawesome.com/3981d882ec.js" crossorigin="anonymous"></script>
  </body>
</html>
