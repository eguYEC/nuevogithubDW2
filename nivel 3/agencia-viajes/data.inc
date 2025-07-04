<?php
//tipo pizza
class destino{
    public $idDestino;
    public $nombres;


    function __construct($_idDestino, $_nombres){
        $this->idDestino = $_idDestino;
        $this->nombres = $_nombres;
    }
}




$tipoDestino = array();
$otipoDestino1 = new destino(1,"Santa Cruz de la Sierra");
$otipoDestino2 = new destino(2,"Cochabamba");
$otipoDestino3 = new destino(3,"Tarija");
$otipoDestino4 = new destino(4,"Sucre");
$otipoDestino5 = new destino(5,"La Paz");
$otipoDestino6 = new destino(6,"Oruro");

$tipoDestino[] = $otipoDestino1;
$tipoDestino[] = $otipoDestino2;
$tipoDestino[] = $otipoDestino3;
$tipoDestino[] = $otipoDestino4;
$tipoDestino[] = $otipoDestino5;
$tipoDestino[] = $otipoDestino6;



//tipo tamaño
class tipotours{
    public $idtours;
    public $nombre;
    public $duracion;
    public $precio;
    public $lugar1;
    public $lugar2;
    public $lugar3;
    public $idDestino;
    public $nombres;

    function __construct($_idtours, $_nombre, $_duracion, $_precio, $_lugar1, $_lugar2, $_lugar3, $_idDestino, $_nombres){
        $this->idtours = $_idtours;
        $this->nombre = $_nombre;
        $this->duracion = $_duracion;
        $this->precio = $_precio;
        $this->lugar1 = $_lugar1;
        $this->lugar2 = $_lugar2;
        $this->lugar3 = $_lugar3;
        $this->idDestino = $_idDestino;
        $this->nombres = $_nombres;
    }
}


$tipotours = array();
$otipotours1 = new tipotours(1, "Tour Tropical Santa Cruz", "3 días", 150, "Biocentro Güembé", "Samaipata", "Lomas de Arena", 1, "Santa Cruz de la Sierra");
$otipotours2 = new tipotours(2, "Aventura en el Corazón de Bolivia", "2 días", 120, "Cristo de la Concordia", "Parque Tunari", "Laguna Alalay", 2, "Cochabamba");
$otipotours3 = new tipotours(3, "Encanto Chapaco", "3 días", 140, "Casa Dorada", "Viñedos de Concepción", "Represa San Jacinto",3 , "Tarija");
$otipotours4 = new tipotours(4, "Historia Viva en Sucre", "2 días", 110, "La Recoleta", "Casa de la Libertad", "Parque Cretácico",4 , "Sucre");
$otipotours5 = new tipotours(5, "Altura y Tradición Paceña", "4 días", 180, "Teleférico", "Valle de la Luna", "Mercado de las Brujas",5 , "La Paz" );
$otipotours6 = new tipotours(6, "Cultura y Carnaval Orureño", "2 días", 130, "Santuario del Socavón", "Museo Minero", "Carnaval de Oruro", 6, "Oruro");

$tipotours[] = $otipotours1;
$tipotours[] = $otipotours2;
$tipotours[] = $otipotours3;
$tipotours[] = $otipotours4;
$tipotours[] = $otipotours5;
$tipotours[] = $otipotours6;




?>