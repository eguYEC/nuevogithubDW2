<?php
// para las ventas

class venta{
    public $idventa;
    public $nombre;
    public $idinventario;
    public $producto;
    public $cantidad;
    public $precio;
    public $fecha;

    function __construct($_idventa, $_nombre, $_idinventario, $_producto, $_cantidad, $_precio, $_fecha){
        $this->idventa = $_idventa;
        $this->nombre = $_nombre;
        $this->idinventario = $_idinventario;
        $this->producto = $_producto;
        $this->cantidad = $_cantidad;
        $this->precio = $_precio;
        $this->fecha = $_fecha;
        
        
        
    }
}
// Lista de Ligas
$listaventa = array();


//para el inventario
class inventario{
    public $idinventario;
    public $producto;
    public $precio;
    public $cantidad;
    public $estado;
    

   

    function __construct($_idinventario, $_producto, $_precio, $_cantidad, $_estado=1){
        $this->idinventario = $_idinventario;
        $this->producto = $_producto;
        $this->precio = $_precio;
        $this->cantidad = $_cantidad;
        $this->estado = $_estado;
    }
}

// Lista de Equipos
// para el resultado
$oinventario1 = new inventario(1, "Filtro de aceite", 50,10);
$oinventario2 = new inventario(2, "Pastillas de freno", 100,10);
$oinventario3 = new inventario(3, "Batería", 350,10);
$oinventario4 = new inventario(4, "Bujías", 50,10);
$oinventario5 = new inventario(5, "Filtro de aire", 80,10);
$oinventario6 = new inventario(6, "Amortiguadores", 500,10);
$oinventario7 = new inventario(7, "Correa de distribución", 200,10);
$oinventario8 = new inventario(8, "Radiador", 1500,10);
$oinventario9 = new inventario(9, "Alternador", 480,10);
$oinventario10 = new inventario(10, "focos delanteros", 200,10);
$oinventario11 = new inventario(11, "focos traceros", 250,10);


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