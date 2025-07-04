<?php
/*
Project : IMC
Author  : MacBur
*/
require_once "data.inc";

$title = "Simulador de Fútbol";

// Recuperar datos del form
$idLiga = $_POST["liga"]; // idLiga

$nomLiga = "";

// Filtrar los equipos segun la liga seleccionada
$listaEquiposFiltrados = array();
foreach($listaEquipos as $equipo){
    if ( $equipo->idLiga == $idLiga ){
        $listaEquiposFiltrados[] = $equipo;
    }
}

$listaEquipoSel = array(); // lista de 4 equipos
$max = count($listaEquiposFiltrados) - 1;

$listaAleatorios = array();
$p = 1;
while($p <= 4 ){
    $r = rand(0, $max);

    if ( count($listaAleatorios) == 0 ){
        $listaAleatorios[] = $r;
        $p++;
    }else{
        // buscar si el ramdon ya existe
        $swExiste = false;
        foreach($listaAleatorios as $ele){
            if ( $ele == $r ){
                $swExiste = true;
            }
        }

        if ( !$swExiste ){
            $listaAleatorios[] = $r;
            $p++;
        }
    }    
}

$pos1 = $listaAleatorios[0];
$pos2 = $listaAleatorios[1];
$pos3 = $listaAleatorios[2];
$pos4 = $listaAleatorios[3];

$oEq1 = $listaEquiposFiltrados[$pos1];
$oEq2 = $listaEquiposFiltrados[$pos2];
$oEq3 = $listaEquiposFiltrados[$pos3];
$oEq4 = $listaEquiposFiltrados[$pos4];

$nomEquipo1 = $oEq1->nombre;
$nomEquipo2 = $oEq2->nombre;
$nomEquipo3 = $oEq3->nombre;
$nomEquipo4 = $oEq4->nombre;

$res1 = rand(0,5); //3
$res2 = rand(0,5); //3
while ( $res1 == $res2 ){
    $res2 = rand(0,5);
}

if ( $res1 > $res2 ){
    // ganador res1
    $nomGanador1 = $nomEquipo1;
}else{
    $nomGanador1 = $nomEquipo4;
}

$res3 = rand(0,5);
$res4 = rand(0,5);
while ( $res3 == $res4 ){
    $res4 = rand(0,5);
}

if ( $res3 > $res4 ){
    // ganador res 3
    $nomGanador2 = $nomEquipo2;
}else{
    $nomGanador2 = $nomEquipo3;
}

$res5 = rand(0,5);
$res6 = rand(0,5);
while ( $res5 == $res6 ){
    $res6 = rand(0,5);
}
if ( $res5 > $res6 ){
    // ganador res 3
    $nomGanador3 = $nomGanador1;
}else{
    $nomGanador3 = $nomGanador2;
}

?>
<html>
<head>
    <title><?php echo $title ?></title>
    <!-- Estilos CSS -->
    <style>
        body{
            margin:0px;
        }
        *{
            box-sizing: border-box;
        }
        .ctn-main{
            width:100%;
            height:100%;
            background: #222222;
        }
        .ctn-form{
            position:absolute;
            top:50px;
            left:calc(50% - 240px);
            width:480px;
            height:calc(100% - 100px);
            background:#ffffff;
            border-radius:10px;
            padding:10px;
            
        }
        .form-header{
            position: absolute;
            top:-40px;
            left:40px;
            width:400px;
            height:80px;
            background: #444444;
            border-radius:10px;
            z-index:1;
        }
        .form-header .ico{
            float:left;
            margin:15px;
            width:50px;
            height:50px;
            background: rgba(255,255,255,0.2);
            border-radius:10px;
        }
        .ico-calculadora{
            background:url('png/ball.png') no-repeat center !important;
            background-size:40px !important;
        }
        .ico-donante{
            background:url('png/ball.png') no-repeat center !important;
            background-size:40px !important;
        }
        .form-title{
            font-family:arial;
            font-size:20px;
            line-height:20px;
            margin-top:30px;
            color:#ffffff;
        }
        .form-content{
            position:relative;
            width:100%;
            height:100%;
            background:lightslategray;
            border-radius:10px;
            padding:40px 10px 10px 10px;
            overflow: auto;
        }
        .x-1{
            float:left;
            width:100%;
            padding-left:5px;
            padding-right:5px;
        }
        .x-2{
            float:left;
            width:50%;
            padding-left:5px;
            padding-right:5px;
        }

        /** Controles */
        .ctn-control{
            margin-top:10px;
        }
        input[type=text]{
            width:100%;
            height:40px;
            padding-left:10px;
            padding-right:10px;
            border:1px solid rgb(81, 89, 126);
            border-bottom:3px solid rgb(81, 89, 126);
            font-family:arial;
            font-size:15px;
            border-radius:5px;
            outline: none;
        }
        input[type=text]:focus{
            border:1px solid rgb(90, 112, 209);
            border-bottom:3px solid rgb(90, 112, 209);
            box-shadow:0px 0px 0px 5px rgba(255,255,255,0.2);
        }

        input[type=submit]{
            width:100%;
            height:40px;
            padding-left:10px;
            padding-right:10px;
            background: rgb(81, 89, 126);
            border:1px solid rgb(81, 89, 126);
            border-bottom:3px solid rgb(81, 89, 126);
            font-family:arial;
            font-size:15px;
            color:#ffffff;
            border-radius:5px;
            outline: none;
            cursor:pointer;
        }
        input[type=submit]:hover{
            background: rgb(90, 112, 209);
            border:1px solid rgb(90, 112, 209);
            border-bottom:3px solid rgb(90, 112, 209);
            box-shadow:0px 0px 0px 5px rgba(255,255,255,0.2);
        }

        select{
            width:100%;
            height:40px;
            padding-left:10px;
            padding-right:10px;
            border:1px solid rgb(81, 89, 126);
            border-bottom:3px solid rgb(81, 89, 126);
            font-family:arial;
            font-size:15px;
            border-radius:5px;
            outline: none;
        }
        .card{
            position: relative;
            width:100%;
            height:auto;
            min-height:40px;
            background: #ffffff;
            font-family:arial;
            font-size:15px;
            line-height:20px;
            color:rgb(81, 89, 126);
            border:2px solid rgb(81, 89, 126);
            border-radius:5px;
            padding:10px;
        }
    </style>
</head>
<body>

<div class='ctn-main'>
    <div class='ctn-form'>
        <div class='form-header'>
            <div class='ico ico-donante'></div>
            <div class='form-title'><?php echo $title ?></div>
        </div>
        <div class='form-content'>
            <div class='card'><?php echo $nomLiga ?></div>
            <div class='card'>
                Equipo 1: <?php echo $nomEquipo1 ?><hr>
                Equipo 2: <?php echo $nomEquipo2 ?><hr>
                Equipo 3: <?php echo $nomEquipo3 ?><hr>
                Equipo 4: <?php echo $nomEquipo4 ?><hr>
            </div>
            <div class='card'>
                Semifinal 1<hr>
                <?php echo $nomEquipo1 ?>: <?php echo $res1 ?><br>
                <?php echo $nomEquipo4 ?>: <?php echo $res2 ?>
            </div>
            <div class='card'>
                Semifinal 2<hr>
                <?php echo $nomEquipo2 ?>: <?php echo $res3 ?><br>
                <?php echo $nomEquipo3 ?>: <?php echo $res4 ?>
            </div>


            <div class='card'>
                Final<hr>
                <?php echo $nomGanador1 ?>: <?php echo $res5 ?><br>
                <?php echo $nomGanador2 ?>: <?php echo $res6 ?>
            </div>
            <div class='card'>
                Ganador<hr>
                <?php echo $nomGanador3 ?><br>
            </div>
        </div>
    </div>
</div>

</body>
</html>