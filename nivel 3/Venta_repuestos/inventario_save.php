<?php
session_start();
require_once "data.inc";

// Recibir datos del formulario
$producto = $_POST["nom"];
$precio = $_POST["precio"];
$cantidad = $_POST["cant"];

// Obtener la lista actual desde sesión o desde la original
if (isset($_SESSION["sInventario"])) {
    $listaInventarioTemp = unserialize($_SESSION["sInventario"]);
} else {
    $listaInventarioTemp = $listainventario;
}

// Calcular nuevo ID
if (count($listaInventarioTemp) > 0) {
    $ultimo = end($listaInventarioTemp);
    $nuevoID = $ultimo->idinventario + 1;
} else {
    $nuevoID = 1;
}

// Crear nuevo objeto Inventario
$nuevoRepuesto = new inventario($nuevoID, $producto, $precio, $cantidad);

// Agregar a la lista
$listaInventarioTemp[] = $nuevoRepuesto;

// Guardar en sesión
$_SESSION["sInventario"] = serialize($listaInventarioTemp);

// Redirigir
header("Location: inventario_list.php");
exit;
