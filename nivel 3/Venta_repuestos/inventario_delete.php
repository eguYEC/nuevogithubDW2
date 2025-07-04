<?php
/*session_start();
require_once "data.inc";

$id = isset($_GET["idEquipo"]) ? base64_decode($_GET["idEquipo"]) : null;

if (isset($_SESSION["sInventario"])) {
    $listaInventarioTemp = unserialize($_SESSION["sInventario"]);
} else {
    $listaInventarioTemp = $listainventario;
}

// Filtrar eliminando el repuesto con el ID indicado
$listaInventarioTemp = array_filter($listaInventarioTemp, function($item) use ($id) {
    return $item->idinventario != $id;
});

// Reindexar
$listaInventarioTemp = array_values($listaInventarioTemp);

// Guardar la nueva lista
$_SESSION["sInventario"] = serialize($listaInventarioTemp);

// Redirigir
header("Location: inventario_list.php");
exit;*/



session_start();
require_once "data.inc";

if (isset($_GET['idinventario']) && isset($_SESSION['sInventario'])) {
    $idinventario = base64_decode($_GET['idinventario']);
    $inventario = unserialize($_SESSION['sInventario']);

    foreach ($inventario as $item) {
        
        if ($item->idinventario == $idinventario) {
            // Cambiar el estado: 1 (activo), 0 (anulado)
            $item->estado = ($item->estado == 1) ? 0 : 1;
            break;
        }
    }

    $_SESSION['sInventario'] = serialize($inventario);
}

header("Location: inventario_list.php");
exit;


