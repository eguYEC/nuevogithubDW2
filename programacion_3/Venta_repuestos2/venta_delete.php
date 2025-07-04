<?php
session_start();
require_once "data.inc";

if (isset($_GET['idventa']) && isset($_SESSION['sventas'])) {
    $idventa = base64_decode($_GET['idventa']);
    $ventas = unserialize($_SESSION['sventas']);

    // Filtrar todas las ventas excepto la que se va a eliminar
    $ventas = array_filter($ventas, function($venta) use ($idventa) {
        return $venta->idventa != $idventa;
    });

    // Reindexar array
    $ventas = array_values($ventas);

    $_SESSION['sventas'] = serialize($ventas);
}

header("Location: venta_list.php");
exit;
