
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="log.css">
  </head>
  <body>
    <form action="validar.php" method="post">
    <section class="form-login">
      <h5>Entrar</h5>
      <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="" value="Ingresar" href="index.html">
      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>
      <p><a href="registrar.php">REGISTRATE</a></p>
      <p> <?php echo($_REQUEST["Error"]);?> </p>
    </section>
  </form>
  </body>
</html>