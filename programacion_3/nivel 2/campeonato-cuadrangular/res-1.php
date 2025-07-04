<?php
/*
Project : IMC
Author  : MacBur
*/
require_once "data.inc";

$title = "Campeonato Cuadrangular ";

$tipo1 = $_POST["tipo1"];
$tipo2 = $_POST["tipo2"];
$tipo3 = $_POST["tipo3"];
$tipo4 = $_POST["tipo4"];

$n1 = rand(1,5);
$n2 = rand(1,5);
$n3 = rand(1,5);
$n4 = rand(1,5);
$n5 = rand(1,5);
$n6 = rand(1,5);
$n7 = rand(1,5);
$n8 = rand(1,5);
$n9 = rand(1,5);
$n10 = rand(1,5);
$n11 = rand(1,5);
$n12 = rand(1,5);


$jornada1 = "";
$jornada2 = "";
$jornada3 = "";



$jornada1 .= $tipo1." ".$n1."-".$n2." ".$tipo3."<br>".$tipo4." ".$n3."-".$n4." ".$tipo2."<br>";
$jornada2 .= $tipo2." ".$n5."-".$n6." ".$tipo1."<br>".$tipo3." ".$n7."-".$n8." ".$tipo4."<br>";
$jornada3 .= $tipo1." ".$n9."-".$n10." ".$tipo2."<br>".$tipo3." ".$n11."-".$n12." ".$tipo4."<br>";

// Inicializar puntajes
$puntajes = array(
    $tipo1 => 0,
    $tipo2 => 0,
    $tipo3 => 0,
    $tipo4 => 0,
);

// Simular resultados (ya están generados arriba)
// Partido 1: $tipo1 vs $tipo3 => $n1 - $n2
if ($n1 > $n2) {
    $puntajes[$tipo1] += 3;
} elseif ($n1 < $n2) {
    $puntajes[$tipo3] += 3;
} else {
    $puntajes[$tipo1] += 1;
    $puntajes[$tipo3] += 1;
}

// Partido 2: $tipo4 vs $tipo2 => $n3 - $n4
if ($n3 > $n4) {
    $puntajes[$tipo4] += 3;
} elseif ($n3 < $n4) {
    $puntajes[$tipo2] += 3;
} else {
    $puntajes[$tipo4] += 1;
    $puntajes[$tipo2] += 1;
}

// Partido 3: $tipo2 vs $tipo1 => $n5 - $n6
if ($n5 > $n6) {
    $puntajes[$tipo2] += 3;
} elseif ($n5 < $n6) {
    $puntajes[$tipo1] += 3;
} else {
    $puntajes[$tipo2] += 1;
    $puntajes[$tipo1] += 1;
}

// Partido 4: $tipo3 vs $tipo4 => $n7 - $n8
if ($n7 > $n8) {
    $puntajes[$tipo3] += 3;
} elseif ($n7 < $n8) {
    $puntajes[$tipo4] += 3;
} else {
    $puntajes[$tipo3] += 1;
    $puntajes[$tipo4] += 1;
}

// Partido 5: $tipo3 vs $tipo2 => $n9 - $n10
if ($n9 > $n10) {
    $puntajes[$tipo3] += 3;
} elseif ($n9 < $n10) {
    $puntajes[$tipo2] += 3;
} else {
    $puntajes[$tipo3] += 1;
    $puntajes[$tipo2] += 1;
}

// Partido 6: $tipo1 vs $tipo4 => $n11 - $n12
if ($n11 > $n12) {
    $puntajes[$tipo1] += 3;
} elseif ($n11 < $n12) {
    $puntajes[$tipo4] += 3;
} else {
    $puntajes[$tipo1] += 1;
    $puntajes[$tipo4] += 1;
}

// Ordenar por puntaje (de mayor a menor)
arsort($puntajes);

// Obtener ganador
reset($puntajes);
$ganador = key($puntajes);

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
            <!-- Contenido del Formulario -->
            <div class='x-1'>
                <div class='card'>
                    jornada 1: <?php echo $jornada1 ?>
                </div>
                <div class='card'>
                    jornada 2: <?php echo $jornada2 ?>
                </div>
                <div class='card'>
                    jornada 3: <?php echo $jornada3 ?>
                </div>
                <div class='card'>
                    <strong>Tabla de posiciones:</strong><br>
                    <?php
                    foreach ($puntajes as $equipo => $puntos) {
                    echo "$equipo: $puntos puntos<br>";
                    }
                    ?>
                </div>

                <div class='card'>
                    <strong>🏆 Ganador del campeonato:</strong><br>
                    <?php echo $ganador ?>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>