<?php

session_start();
require_once "data.inc";

// recibir los datos del form
$nom = $_POST["nom"];
$cantidad = $_POST["cantidad"]; 

if ( isset($_SESSION["sInventario"]) ){
    $listaInventarioTemp  = unserialize($_SESSION["sInventario"]);
}else{
    $listaInventarioTemp  = $listainventario ;
}
$total = count($listaInventarioTemp);
$lastId = ($total > 0) ? $listaInventarioTemp[$total - 1]->idinventario : 0;
$cod = $lastId + 1;



/*
$total = count($listaInventarioTemp );
$oTemp = $listaInventarioTemp [$total - 1]; // ultima posicion
$cod = $oTemp->idEquipo + 1;
*/




$oInventario = new Inventario($nom, $cantidad);


$listaInventarioTemp [] = $oInventario;
$_SESSION["sInventario"] = serialize($listaInventarioTemp );

header("location: inventario_list.php"); // redireccionar
/*
$listaTemp = $_SESSION["sLigas"];
foreach($listaTemp as $item){
    echo "<br>" .  $item->nombre;
}*/

?>