<?php
include 'conexion.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$bodega = $_POST['bodega'];
$sucursal = $_POST['sucursal'];
$moneda = $_POST['moneda'];
$precio = $_POST['precio'];
$materiales = implode(", ", $_POST['material']);
$descripcion = $_POST['descripcion'];

// Verificar código único
$stmt = $conexion->prepare("SELECT COUNT(*) FROM productos WHERE codigo = :codigo");
$stmt->execute(['codigo' => $codigo]);
if ($stmt->fetchColumn() > 0) {
  echo json_encode(["success" => false, "message" => "El código del producto ya está registrado."]);
  exit;
}

// Insertar producto
$sql = "INSERT INTO productos (codigo, nombre, id_bodega, id_sucursal, id_moneda, precio, materiales, descripcion)
        VALUES (:codigo, :nombre, :bodega, :sucursal, :moneda, :precio, :materiales, :descripcion)";
$stmt = $conexion->prepare($sql);
$stmt->execute([
  'codigo' => $codigo,
  'nombre' => $nombre,
  'bodega' => $bodega,
  'sucursal' => $sucursal,
  'moneda' => $moneda,
  'precio' => $precio,
  'materiales' => $materiales,
  'descripcion' => $descripcion
]);

echo json_encode(["success" => true]);
?>
