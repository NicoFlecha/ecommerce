<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php require_once('parts/header.php') ?>
    <div class="relleno">
    </div>
    <h1>Iniciar Sesión</h1>
    <div class="contenedorFormulario">
      <form class="login" action="login.php" method="post">
        <label for="user">Email ó Usuario:</label>
        <input type="text" name="user" id="user" placeholder="sarasa" value="">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <div class="paraIngresar">
          <input class="ingresar" type="submit" value="Ingresar">
        </div>
      </form>
    </div>
    <?php require_once('parts/footer.php') ?>
  </body>
</html>
