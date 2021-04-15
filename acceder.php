<?php
require_once "./conexion.php";
// Check connection
if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//obtenemos los valores del formulario
$Usuario=$_POST['Usuario'];
$hash= password_hash($password , PASSWORD_DEFAULT, ['cost' => 10]);
$Nombre=$_POST['Nombre'];
$ApPat=$_POST['ApPat'];
$ApMat=$_POST['ApMat'];
$email=$_POST['email'];

echo "Connected successfully ";
 
$sql = "INSERT INTO Usuario(Usuario,Contrasena,Nombre,ApPat,ApMat,email)VALUES('$Usuario','$hash','$Nombre','$ApPat','$ApMat','$email')";
if (mysqli_query($con, $sql )) {

      header("Location:index.php?Error=Registro exitoso");
} else {
      header("Location:index.php?Error=No se completo el registro");
}
mysqli_close($con);


