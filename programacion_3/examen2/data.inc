<?php
// para el alquiler

class Alquiler{
    public $idAlquiler;
    public $nombre;
    public $precio;

    function __construct($_idAlquiler, $_nombre, $_precio){
        $this->idAlquiler = $_idAlquiler;
        $this->nombre = $_nombre;
        $this->precio = $_precio;
    }
}

// Lista de herramientas
$tipoAlquiler = array();
$oAlquiler1 = new Alquiler(1, "Por Hora", 60);
$oAlquiler2 = new Alquiler(2, "Ilimitado", 100);



$tipoAlquiler[] = $oAlquiler1;
$tipoAlquiler[] = $oAlquiler2;

// para el Extras

class Extra{
    public $idExtra;
    public $nombre;
    public $precio;

    function __construct($_idExtra, $_nombre, $_precio){
        $this->idExtra = $_idExtra;
        $this->nombre = $_nombre;
        $this->precio = $_precio;
    }
}

// Lista de herramientas
$tipoExtra = array();
$oExtra1 = new Extra(1, "Ninguno", 0);
$oExtra2 = new Extra(2, "Patines", 30);
$oExtra3 = new Extra(3, "Gorro", 10);
$oExtra4 = new Extra(4, "Guantes", 10);


$tipoExtra[] = $oExtra1;
$tipoExtra[] = $oExtra2;
$tipoExtra[] = $oExtra3;
$tipoExtra[] = $oExtra4;


?>