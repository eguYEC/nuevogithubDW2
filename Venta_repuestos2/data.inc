<?php
// data.inc

// Clase para las Ventas
class Venta {
    public $idventa;
    public $nombre_cliente; // Cambiado para mayor claridad, "nombre" puede ser ambiguo
    public $idinventario;
    public $producto;
    public $cantidad;
    public $precio_unitario; // Cambiado para mayor claridad
    public $total_venta; // Añadido para almacenar el precio total de la venta del artículo

    function __construct($_idventa, $_nombre_cliente, $_idinventario, $_producto, $_cantidad, $_precio_unitario) {
        $this->idventa = $_idventa;
        $this->nombre_cliente = $_nombre_cliente;
        $this->idinventario = $_idinventario;
        $this->producto = $_producto;
        $this->cantidad = $_cantidad;
        $this->precio_unitario = $_precio_unitario;
        $this->total_venta = $_cantidad * $_precio_unitario; // Calcular el total al construir
    }
}

// Lista de Ventas (inicialmente vacía o con datos de ejemplo si los tienes)
$listaventa = array();
// Ejemplo de una venta si quieres tener datos iniciales:
// $listaventa[] = new Venta(1, "Cliente A", 1, "Filtro de aceite", 2, 50);


// Clase para el Inventario
class Inventario { // Cambiado a 'Inventario' con 'I' mayúscula para seguir convenciones de clases
    public $idinventario;
    public $producto;
    public $precio;
    public $cantidad;

    function __construct($_idinventario, $_producto, $_precio, $_cantidad) {
        $this->idinventario = $_idinventario;
        $this->producto = $_producto;
        $this->precio = $_precio;
        $this->cantidad = $_cantidad;
    }
}

// Lista de Inventario (manteniendo el formato original)
$oinventario1 = new Inventario(1, "Filtro de aceite", 50, 10);
$oinventario2 = new Inventario(2, "Pastillas de freno", 100, 10);
$oinventario3 = new Inventario(3, "Batería", 350, 10);
$oinventario4 = new Inventario(4, "Bujías", 50, 10);
$oinventario5 = new Inventario(5, "Filtro de aire", 80, 10);
$oinventario6 = new Inventario(6, "Amortiguadores", 500, 10);
$oinventario7 = new Inventario(7, "Correa de distribución", 200, 10);
$oinventario8 = new Inventario(8, "Radiador", 1500, 10);
$oinventario9 = new Inventario(9, "Alternador", 480, 10);
$oinventario10 = new Inventario(10, "Focos delanteros", 200, 10);
$oinventario11 = new Inventario(11, "Focos traseros", 250, 10);

$listainventario = array();

$listainventario[] = $oinventario1;
$listainventario[] = $oinventario2;
$listainventario[] = $oinventario3;
$listainventario[] = $oinventario4;
$listainventario[] = $oinventario5;
$listainventario[] = $oinventario6;
$listainventario[] = $oinventario7;
$listainventario[] = $oinventario8;
$listainventario[] = $oinventario9;
$listainventario[] = $oinventario10;
$listainventario[] = $oinventario11;

?>