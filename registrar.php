<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="log.css">
  </head>
  <body>
  <form action="acceder.php" method="POST" class="contacto">
  <section class="form-login">
      <h5>REGISTRATE</h5>
    <fieldset>
         <input class="controls" type="text" name="Usuario" value="" placeholder="Usuario">

         
        <input class="controls" type="password" name="Contrasena" value="" placeholder="Contraseña">
       <input class="controls" type="text" name="Nombre" value="" placeholder="Nombre">
       <input class="controls" type="text" name="ApPat" value="" placeholder="Apellido Paterno">
       <input class="controls" type="text" name="ApMat" value="" placeholder="Apellido Materno">
       <input class="controls" type="text" name="email" value="" placeholder="E-mail">
       <input class="buttons" type="submit" name="" value="REGISTRAR" href="acceder.php">
    </fieldset>
     
      <p> <?php echo($_REQUEST["Error"]);?> </p>
    </section>
  </form>
  </body>
</html>