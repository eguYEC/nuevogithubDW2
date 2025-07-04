<?php
// para el index

class Ferreteria{
    public $idferre;
    public $nombre;
    public $precio;

    function __construct($_idferre, $_nombre, $_precio){
        $this->idferre = $_idferre;
        $this->nombre = $_nombre;
        $this->precio = $_precio;
    }
}

// Lista de herramientas
$listaHerramientas = array();
$oLihe1 = new Ferreteria(1, "Taladro", 200);
$oLihe2 = new Ferreteria(2, "Cemento", 80);
$oLihe3 = new Ferreteria(3, "Destornillador Estrella", 20);
$oLihe4 = new Ferreteria(4, "Destornillador Plano", 20);
$oLihe5 = new Ferreteria(5, "Set de Dados", 150);
$oLihe6 = new Ferreteria(6, "Motosierra", 500);


$listaHerramientas[] = $oLihe1;
$listaHerramientas[] = $oLihe2;
$listaHerramientas[] = $oLihe3;
$listaHerramientas[] = $oLihe4;
$listaHerramientas[] = $oLihe5;
$listaHerramientas[] = $oLihe6;


?>