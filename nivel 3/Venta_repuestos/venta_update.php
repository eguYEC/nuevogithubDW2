<?php
session_start();
require_once "data.inc";

$idventa = $_POST['idventa'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$idinventario = $_POST['herramienta'];
$fecha = $_POST['fecha'];

// Obtener producto y precio según inventario
$producto = "";
$precio = 0;
foreach ($listainventario as $item) {
    if ($item->idinventario == $idinventario) {
        $producto = $item->producto;
        $precio = $item->precio;
        break;
    }
}

if (isset($_SESSION["sventas"])) {
    $ventas = unserialize($_SESSION["sventas"]);

    foreach ($ventas as $venta) {
        if ($venta->idventa == $idventa) {
            $venta->nombre = $nombre;
            $venta->cantidad = $cantidad;
            $venta->producto = $producto;
            $venta->idinventario = $idinventario;
            $venta->precio = $precio;
            $venta->fecha = $fecha;
            break;
        }
    }

    $_SESSION["sventas"] = serialize($ventas);
}

header("Location: venta_list.php");
exit;
