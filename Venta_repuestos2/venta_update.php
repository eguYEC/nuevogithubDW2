<?php
session_start();
require_once "data.inc"; // Asegúrate de que este archivo contiene las clases Venta e Inventario y $listainventario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idventa = $_POST['idventa'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $cantidad = $_POST['cantidad'];
    $idinventario = $_POST['idinventario']; // Este es el valor del producto seleccionado en el <select>

    // Obtener producto y precio unitario según el idinventario seleccionado
    $producto_nombre = "";
    $precio_unitario = 0;
    foreach ($listainventario as $item) {
        if ($item->idinventario == $idinventario) {
            $producto_nombre = $item->producto;
            $precio_unitario = $item->precio;
            break;
        }
    }

    // Calcular el nuevo total de la venta EN EL SERVIDOR
    $total_venta = $cantidad * $precio_unitario;

    if (isset($_SESSION["sventas"])) {
        $ventas = unserialize($_SESSION["sventas"]);

        foreach ($ventas as &$venta) { // Usar '&' para pasar por referencia y modificar el objeto original
            if ($venta->idventa == $idventa) {
                // Actualizar todas las propiedades de la venta
                $venta->nombre_cliente = $nombre_cliente;
                $venta->cantidad = $cantidad;
                $venta->idinventario = $idinventario;
                $venta->producto = $producto_nombre;
                $venta->precio_unitario = $precio_unitario;
                $venta->total_venta = $total_venta; // ¡Aquí se actualiza el total!
                break;
            }
        }

        $_SESSION["sventas"] = serialize($ventas);
    }

    header("Location: venta_list.php");
    exit;
} else {
    // Si se intenta acceder directamente sin POST
    header("Location: venta_list.php");
    exit;
}
?>