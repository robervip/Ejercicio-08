<?php
$conexion = new mysqli("localhost", "root", "", "nba");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $nombre=$_POST["Nombre"];
  $ciudad=$_POST["Ciudad"];
  $conferencia=$_POST["Conferencia"];
  $division=$_POST["Division"];
  $consulta="INSERT INTO equipos (Nombre, Ciudad, Conferencia, Division)
        VALUES ('$nombre', '$ciudad', '$conferencia', '$division')";
  $resultado=$conexion->query($consulta);
  if ($resultado==false) {
    echo "Inserccion incorrecta";
  }
  else {
    echo "Inserccion correcta";
  }
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


     ?>
  </body>
</html>
