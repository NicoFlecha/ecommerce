<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php require_once('parts/header.php') ?>

    <div class="relleno">

    </div>

    <h1>¡Registrate!</h1>
    <form class="registro" action="register.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre" placeholder="Roberto" value="">
      <label for="apellido">Apellido:</label>
      <input type="text" name="apellido" id="apellido" placeholder="Sarasa" value="">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="sarasa@sarasa.com" value="">
      <label for="password">Contraseña:</label>
      <input type="password" name="password" id="password">
      <label for="rePassword">Confirmar Password:</label>
      <input type="password" name="rePassword" id="rePassword">
      <div class="paraEnviar">
        <input class="enviar" type="submit" value='Registrarme'>
      </div>
    </form>


    <?php require_once('parts/footer.php') ?>
  </body>
</html>
