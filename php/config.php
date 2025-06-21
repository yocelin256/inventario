<?php
$conn = new mysqli('localhost','root','','inventario_club');
if ($conn->connect_error) {
  die('Error de conexión: '.$conn->connect_error);
}
?>
