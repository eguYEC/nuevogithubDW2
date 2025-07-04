<?php
session_start();
require_once "data.inc";

$id = $_POST["id"];
$nombre = $_POST["nom"];
$precio = $_POST["precio"];
$cantidad = $_POST["cant"];

if (isset($_SESSION["sInventario"])) {
    $listaInventarioTemp = unserialize($_SESSION["sInventario"]);
} else {
    $listaInventarioTemp = $listainventario;
}

// Actualizar el repuesto correspondiente
foreach ($listaInventarioTemp as $item) {
    if ($item->idinventario == $id) {
        $item->producto = $nombre;
        $item->precio = $precio;
        $item->cantidad = $cantidad;
        break;
    }
}

// Guardar nuevamente
$_SESSION["sInventario"] = serialize($listaInventarioTemp);

// Redirigir
header("Location: inventario_list.php");
exit;
