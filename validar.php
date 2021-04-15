<?php
require_once "./conexion.php";
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];


$query= "SELECT Contrasena FROM Usuario WHERE Usuario='$usuario'";



//si la consulta devuelve renglones el usuario es correcto
if(password_verify($contrasena, $query))
{
    echo 'VERIFICADO' . $query . '=' . $contrasena ;
}else {
    echo 'error en el codigo'. $query . '=' . $contrasena;
}


?>