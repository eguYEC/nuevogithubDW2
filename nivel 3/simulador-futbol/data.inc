<?php
// para el index

class Liga{
    public $idLiga;
    public $nombre;

    function __construct($_idLiga, $_nombre){
        $this->idLiga = $_idLiga;
        $this->nombre = $_nombre;
    }
}

class Equipo{
    public $idEquipo;
    public $nombre;
    public $idLiga;

    function __construct($_idEquipo, $_nombre, $_idLiga){
        $this->idEquipo = $_idEquipo;
        $this->nombre = $_nombre;
        $this->idLiga = $_idLiga;
    }
}

// Lista de Ligas
$listaLigas = array();
$oLiga1 = new Liga(1, "Liga BBVA");
$oLiga2 = new Liga(2, "Liga Premier");
$oLiga3 = new Liga(3, "Ligue 1");

$listaLigas[] = $oLiga1;
$listaLigas[] = $oLiga2;
$listaLigas[] = $oLiga3;

// Lista de Equipos
// para el resultado
$oEquipo1 = new Equipo(1, "FC Barcelona", 1);
$oEquipo2 = new Equipo(2, "Real Madrid", 1);
$oEquipo3 = new Equipo(3, "Valladolid", 1);
$oEquipo4 = new Equipo(4, "Betis", 1);
$oEquipo5 = new Equipo(5, "Sevilla", 1);
$oEquipo6 = new Equipo(6, "Atlético de Madrid", 1);
$oEquipo7 = new Equipo(7, "Liverpool", 2);
$oEquipo8 = new Equipo(8, "Totteham", 2);
$oEquipo9 = new Equipo(9, "Chelsea", 2);
$oEquipo10 = new Equipo(10, "Manchester City", 2);
$oEquipo11 = new Equipo(11, "Manchester United", 2);
$oEquipo12 = new Equipo(12, "Arsenal", 2);
$oEquipo13 = new Equipo(13, "Paris Saint‑Germain (PSG)", 3);
$oEquipo14= new Equipo(14, "Olympique de Marseille", 3);
$oEquipo15= new Equipo(15, "AS Monaco", 3);
$oEquipo16 = new Equipo(16, "Lille OSC", 3);
$oEquipo17 = new Equipo(17, "Olympique Lyonnais (Lyon)", 3);
$oEquipo18 = new Equipo(18, "RC Strasbourg Alsace", 3);

$listaEquipos = array();

$listaEquipos[] = $oEquipo1;
$listaEquipos[] = $oEquipo2;
$listaEquipos[] = $oEquipo3;
$listaEquipos[] = $oEquipo4;
$listaEquipos[] = $oEquipo5;
$listaEquipos[] = $oEquipo6;
$listaEquipos[] = $oEquipo7;
$listaEquipos[] = $oEquipo8;
$listaEquipos[] = $oEquipo9;
$listaEquipos[] = $oEquipo10;
$listaEquipos[] = $oEquipo11;
$listaEquipos[] = $oEquipo12;
$listaEquipos[] = $oEquipo13;
$listaEquipos[] = $oEquipo14;
$listaEquipos[] = $oEquipo15;
$listaEquipos[] = $oEquipo16;
$listaEquipos[] = $oEquipo17;
$listaEquipos[] = $oEquipo18;

?>