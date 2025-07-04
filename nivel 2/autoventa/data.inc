<?php
// para tipo de vehiculo
$tipovehiculo = array();
$tipovehiculo[] = array("idvehiculo" => 1, "nombre" => "Auto");
$tipovehiculo[] = array("idvehiculo" => 2, "nombre" => "Vagoneta");
$tipovehiculo[] = array("idvehiculo" => 3, "nombre" => "Camioneta");
$tipovehiculo[] = array("idvehiculo" => 4, "nombre" => "Micro");

// para tipo de modelos
$modelos = array();
$modelos[] = array("idmodelos" => 1, "nombres" => "Toyota Corolla Sedan mod: 2023", "idvehiculo" => 1, "nombre" => "Auto");
$modelos[] = array("idmodelos" => 2, "nombres" => "Hyundai Tucson mod: 2025", "idvehiculo" => 2, "nombre" => "Vagoneta");
$modelos[] = array("idmodelos" => 3, "nombres" => "Ford Ranger mod: 2025","idvehiculo" => 3, "nombre" => "Camioneta");
$modelos[] = array("idmodelos" => 4, "nombres" => "Mercedes-Benz OF 1721 mod: 2024", "idvehiculo" => 4, "nombre" => "Micro");
$modelos[] = array("idmodelos" => 5, "nombres" => "Honda Civic mod: 2023", "idvehiculo" => 1, "nombre" => "Auto");
$modelos[] = array("idmodelos" => 6, "nombres" => "Kia Sportage mod: 2025","idvehiculo" => 2, "nombre" => "Vagoneta");
$modelos[] = array("idmodelos" => 7, "nombres" => "Toyota Hilux mod: 2025", "idvehiculo" => 3, "nombre" => "Camioneta");
$modelos[] = array("idmodelos" => 8, "nombres" => "Volvo B270F mod: 2024", "idvehiculo" => 4, "nombre" => "Micro");

// para tipo de color
$colores = array();
$colores[] = array("idcolor" => 1, "nombre" => "Blanco");
$colores[] = array("idcolor" => 2, "nombre" => "Negro");
$colores[] = array("idcolor" => 3, "nombre" => "Gris");
$colores[] = array("idcolor" => 4, "nombre" => "Rojo");

//posibles compras

$listadevehiculos = array();
$listadevehiculos[] = array("idvehiculo" => 1, "nombre" => "Auto", "idmodelos" => 1, "nombres" => "Toyota Corolla Sedan mod: 2023", "idcolor" => 1, "nombr" => "Blanco", "Precio" => "14000");
$listadevehiculos[] = array("idvehiculo" => 2, "nombre" => "Vagoneta", "idmodelos" => 2, "nombres" => "Hyundai Tucson mod: 2025", "idcolor" => 2, "nombr" => "Negro", "Precio" => "35000");
$listadevehiculos[] = array("idvehiculo" => 3, "nombre" => "Camioneta", "idmodelos" => 3, "nombres" => "Ford Ranger mod: 2025", "idcolor" => 3, "nombr" => "Gris", "Precio" => "48000");
$listadevehiculos[] = array("idvehiculo" => 4, "nombre" => "Micro", "idmodelos" => 4, "nombres" => "Mercedes-Benz OF 1721 mod: 2024", "idcolor" => 1, "nombr" => "Blanco", "Precio" => "80000");
$listadevehiculos[] = array("idvehiculo" => 1, "nombre" => "Auto", "idmodelos" => 5, "nombres" => "Honda Civic mod: 2023", "idcolor" => 4, "nombr" => "Rojo", "Precio" => "16000");
$listadevehiculos[] = array("idvehiculo" => 2, "nombre" => "Vagoneta", "idmodelos" => 6, "nombres" => "Kia Sportage mod: 2025", "idcolor" => 3, "nombr" => "Gris", "Precio" => "38000");
$listadevehiculos[] = array("idvehiculo" => 3, "nombre" => "Camioneta", "idmodelos" => 7, "nombres" => "Toyota Hilux mod: 2025", "idcolor" => 2, "nombr" => "Negro", "Precio" => "52000");
$listadevehiculos[] = array("idvehiculo" => 4, "nombre" => "Micro", "idmodelos" => 8, "nombres" => "Volvo B270F mod: 2024", "idcolor" => 1, "nombr" => "Blanco", "Precio" => "85000");



?>