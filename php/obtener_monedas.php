<?php
include 'conexion.php';
$stmt = $conexion->query("SELECT id, nombre FROM monedas");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
