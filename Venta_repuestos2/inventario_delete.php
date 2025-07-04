<?php
// inventario_delete.php

session_start();
require_once "data.inc";

// Recibir el ID del inventario a eliminar del parámetro GET
// Asegúrate de que el nombre del parámetro sea 'idInventario' como en inventario_list.php y inventario_edit.php
if (isset($_GET["idInventario"])) {
    $idInventario = base64_decode($_GET["idInventario"]);
} else {
    // Si no se proporciona idInventario, redirigir a la lista de inventario
    header("Location: inventario_list.php");
    exit();
}

// Cargar la lista de inventario de la sesión, o la lista inicial si la sesión no existe
if (isset($_SESSION["sInventario"])) { // Usamos "sInventario" para la sesión de inventario
    $listaInventarioTemp = unserialize($_SESSION["sInventario"]);
} else {
    $listaInventarioTemp = $listainventario; // $listainventario viene de data.inc
}

// Crear una nueva lista excluyendo el elemento con el ID especificado
$newListaInventario = array();
foreach ($listaInventarioTemp as $elemento) {
    // Solo añadir el elemento a la nueva lista si su ID no coincide con el ID a eliminar
    if ($elemento->idinventario != $idInventario) { // Asegúrate de usar 'idinventario' (minúscula) como en tu clase Inventario
        $newListaInventario[] = $elemento;
    }
}

// Guardar la nueva lista (sin el elemento eliminado) de vuelta en la sesión
$_SESSION["sInventario"] = serialize($newListaInventario);

// Redirigir de vuelta a la lista de inventario
header("Location: inventario_list.php");
exit(); // Es importante usar exit() después de un header("Location")

?>