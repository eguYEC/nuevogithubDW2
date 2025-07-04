<?php
session_start();
require_once "data.inc";

// recibir los datos del formulario
$nom = $_POST["nom"];
$herramienta = $_POST["herramienta"];
$cant = $_POST["cantidad"];

// cargar ventas existentes
if (isset($_SESSION["sventas"])) {
    $listaVentaTemp = unserialize($_SESSION["sventas"]);
} else {
    $listaVentaTemp = $listaventa;
}

$total = count($listaVentaTemp);
$lastId = ($total > 0) ? $listaVentaTemp[$total - 1]->idventa : 0;
$cod = $lastId + 1;

// Buscar producto y precio
$producto = "";
$precio = 0;
foreach ($listainventario as $item) {
    if ($item->idinventario == $herramienta) {
        $producto = $item->producto;
        $precio = $item->precio;
        break;
    }
}

// Crear objeto correctamente
$oventa = new venta($cod, $nom, $herramienta, $producto, $cant, $precio);

$listaVentaTemp[] = $oventa;
$_SESSION["sventas"] = serialize($listaVentaTemp);

header("location: venta_list.php");
exit;
?>
