<?php
include 'conexion.php';

if (!isset($_GET['bodega_id'])) {
  echo json_encode([]);
  exit;
}

$bodega_id = $_GET['bodega_id'];

$stmt = $conexion->prepare("SELECT id, nombre FROM sucursales WHERE id_bodega = :id_bodega");
$stmt->execute(['id_bodega' => $bodega_id]);

echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>