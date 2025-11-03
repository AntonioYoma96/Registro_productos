<?php
$host = "localhost";
$dbname = "registro_productos";
$user = "postgres";
$pass = "camarasecreta";

try {
  $conexion = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Error de conexión: " . $e->getMessage();
}
?>