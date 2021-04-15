<?php
$destino="root.liliana@gmail.com";
$nombre = $_post["nombre"];
$correo = $_post["correo"];
$telefono = $_post["telefono"];
$mensaje = $_post["mensaje"];

$contenido = "Nombre: " . $nombre . " \nCorreo: ". $correo . "\nTelefono : ". $telefono . " \nMensaje: " . $mensaje;

mail($destino,"Mensaje EduEvo",$contenido);
header("Location:inicio.html");
?>