<?php
class tiposervicio{
    public $idTipo;
    public $nombre;
    public $precio;


    function __construct($_idTipo, $_nombre, $_precio){
        $this->idTipo = $_idTipo;
        $this->nombre = $_nombre;
        $this->precio = $_precio;
    }
}




$tiposervicio = array();
$otiposervicio1 = new tiposervicio(1,"Corte de Cabello", 70);
$otiposervicio2 = new tiposervicio(2,"Alisado", 120);
$otiposervicio3 = new tiposervicio(3,"Tinte", 80);
$otiposervicio4 = new tiposervicio(4,"Rulos", 50);

$tiposervicio[] = $otiposervicio1;
$tiposervicio[] = $otiposervicio2;
$tiposervicio[] = $otiposervicio3;
$tiposervicio[] = $otiposervicio4;





?>