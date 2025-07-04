<?php
session_start();
require_once "data.inc";

if (isset($_POST['idInventario']) && isset($_POST['producto']) && isset($_POST['precio']) && isset($_POST['cantidad'])) {
    $idInventario = htmlspecialchars($_POST['idInventario']);
    $producto = htmlspecialchars($_POST['producto']);
    $precio = htmlspecialchars($_POST['precio']);
    $cantidad = htmlspecialchars($_POST['cantidad']);

    if (isset($_SESSION["sInventario"])) {
        $listaInventarioTemp = unserialize($_SESSION["sInventario"]);
    } else {
        $listaInventarioTemp = $listainventario;
    }

    // Encontrar el elemento y actualizar sus propiedades
    foreach ($listaInventarioTemp as $key => $item) {
        if ($item->idinventario == $idInventario) {
            $listaInventarioTemp[$key]->producto = $producto;
            $listaInventarioTemp[$key]->precio = $precio;
            $listaInventarioTemp[$key]->cantidad = $cantidad;
            break;
        }
    }

    $_SESSION["sInventario"] = serialize($listaInventarioTemp);

    // Redirigir de vuelta a la página de la lista de inventario
    header("Location: inventario_list.php");
    exit();
} else {
    // Manejar casos donde faltan datos (por ejemplo, acceso directo al script de actualización)
    header("Location: inventario_list.php");
    exit();
}
?>