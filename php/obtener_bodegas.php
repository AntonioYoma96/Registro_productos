<?php
include 'conexion.php';
$stmt = $conexion->query("SELECT id, nombre FROM bodegas");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
