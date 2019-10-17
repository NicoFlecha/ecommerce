<?php
  if ($_POST)  {
      $jsonProductos = file_get_contents('../database/productos.json');
      $productos = json_decode($jsonProductos, true);
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $imgProducto='img/logo.png';
    if ($_FILES['imgProducto']['error'] === UPLOAD_ERR_OK) {
      $imgNombre = $_FILES['imgProducto']['name'];
      $imgArchivo = $_FILES['imgProducto']['tmp_name'];
      $ext = pathinfo($imgNombre, PATHINFO_EXTENSION);
      $cantProductos = count($productos);
      if ($cantProductos == null) {
        $cantProductos = 0;
      }
      $imgProducto = 'img/productos/' . $imgNombre . ($cantProductos+1) . '.'. $ext;
      move_uploaded_file($imgArchivo, '../'.$imgProducto);
    }
    $producto = [
      'nombre' => $nombre,
      'precio' => $precio,
      'descripcion' => $descripcion,
      'imgProducto' => $imgProducto,
    ];
    $productos[] = $producto;
    $productosFinal=json_encode($productos);
    file_put_contents('../database/productos.json', $productosFinal);
    // Modificar función para que mueva desde funciones.php pero que abra la imagen desde home.php
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="productos.php" method="post" enctype="multipart/form-data">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre"><br>
      <label for="precio">Precio:</label>
      <input type="number" name="precio" id="precio"><br>
      <label for="descripcion">Descripción:</label>
      <textarea name="descripcion" id="descripcion" rows="8" cols="80"></textarea><br>
      <input type="file" name="imgProducto"><br>
      <input type="submit" value="Añadir Producto">
    </form>
  </body>
</html>
