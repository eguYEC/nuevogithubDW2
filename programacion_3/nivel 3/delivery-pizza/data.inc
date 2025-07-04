<?php
//tipo pizza
class tipopizza{
    public $idTipo;
    public $nombre;


    function __construct($_idTipo, $_nombre){
        $this->idTipo = $_idTipo;
        $this->nombre = $_nombre;
    }
}




$tipopizza = array();
$otipopizza1 = new tipopizza(1,"4 Quesos");
$otipopizza2 = new tipopizza(2,"Margarita");
$otipopizza3 = new tipopizza(3,"Peperoni");
$otipopizza4 = new tipopizza(4,"4 Hawaiana");

$tipopizza[] = $otipopizza1;
$tipopizza[] = $otipopizza2;
$tipopizza[] = $otipopizza3;
$tipopizza[] = $otipopizza4;



//tipo tamaño
class tipotamaño{
    public $idTamaño;
    public $nombres;

    function __construct($_idTamaño, $_nombres){
        $this->idTamaño = $_idTamaño;
        $this->nombres = $_nombres;
    }
}


$tipotamaño = array();
$otipotamaño1 = new tipotamaño(1,"Grande");
$otipotamaño2 = new tipotamaño(2,"Mediana");
$otipotamaño3 = new tipotamaño(3,"Personal");
$otipotamaño4 = new tipotamaño(4,"Extra Grande");

$tipotamaño[] = $otipotamaño1;
$tipotamaño[] = $otipotamaño2;
$tipotamaño[] = $otipotamaño3;
$tipotamaño[] = $otipotamaño4;


// para el zona

class zona{
    public $idZona;
    public $nombre;
    public $precio;

    function __construct($_idZona, $_nombre, $_precio){
        $this->idZona = $_idZona;
        $this->nombre = $_nombre;
        $this->precio = $_precio;
    }
}


$Zona = array();
$oZona1 = new zona(1, "Centro", 0);
$oZona2 = new zona(2, "1er anillo", 0);
$oZona3 = new zona(3, "2do anillo", 0);
$oZona4 = new zona(4, "3er anillo", 5);
$oZona5 = new zona(5, "4to anillo", 10);
$oZona6 = new zona(6, "5to anillo", 12);
$oZona7 = new zona(7, "Pasanto el 5to anillo", 15);


$Zona[] = $oZona1;
$Zona[] = $oZona2;
$Zona[] = $oZona3;
$Zona[] = $oZona4;
$Zona[] = $oZona5;
$Zona[] = $oZona6;
$Zona[] = $oZona7;


//datos para el resultado

class resultado{
    public $idTamaño;
    public $nombres;
    public $precio;
    public $idTipo;
    public $nombre;

    function __construct($_idTamaño, $_nombres, $_precio, $_idTipo, $_nombre ){
        $this->idTamaño = $_idTamaño;
        $this->nombres = $_nombres;
        $this->precio = $_precio;
        $this->idTipo = $_idTipo;
        $this->nombre = $_nombre;
    }
}

$listaPizzas = array();

$olisPi1 = new resultado(1,"Grande",55,1,"4 Quesos");
$olisPi2 = new resultado(2,"Mediana",35, 1,"4 Quesos");
$olisPi3 = new resultado(3,"Personal",25,1,"4 Quesos");
$olisPi4 = new resultado(4,"Extra Grande",75, 1,"4 Quesos");
$olisPi5 = new resultado(1,"Grande",55,2,"Margarita");
$olisPi6 = new resultado(2,"Mediana",35,2,"Margarita");
$olisPi7 = new resultado(3,"Personal",25,2,"Margarita");
$olisPi8 = new resultado(4,"Extra Grande",75,2, "Margarita");
$olisPi9 = new resultado(1,"Grande",55, 3,"Peperoni");
$olisPi10 = new resultado(2,"Mediana",35,3,"Peperoni");
$olisPi11 = new resultado(3,"Personal",25,3,"Peperoni");
$olisPi12 = new resultado(4,"Extra Grande",75,3,"Peperoni");
$olisPi13 = new resultado(1,"Grande",55,4,"Hawaiana");
$olisPi14 = new resultado(2,"Mediana",35,4,"Hawaiana");
$olisPi15 = new resultado(3,"Personal", 25,4,"Hawaiana");
$olisPi16 = new resultado(4,"Extra Grande",75, 4,"Hawaiana");

$listaPizzas[] = $olisPi1;
$listaPizzas[] = $olisPi2;
$listaPizzas[] = $olisPi3;
$listaPizzas[] = $olisPi4;
$listaPizzas[] = $olisPi5;
$listaPizzas[] = $olisPi6;
$listaPizzas[] = $olisPi7;
$listaPizzas[] = $olisPi8;
$listaPizzas[] = $olisPi9;
$listaPizzas[] = $olisPi10;
$listaPizzas[] = $olisPi11;
$listaPizzas[] = $olisPi12;
$listaPizzas[] = $olisPi13;
$listaPizzas[] = $olisPi14;
$listaPizzas[] = $olisPi15;
$listaPizzas[] = $olisPi16;


?>