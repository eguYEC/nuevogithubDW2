<?php
require_once "data.inc";

$title = "Salon de Belleza";

// Recuperar datos del form
$fecha = $_POST["fecha"]; 
$nombre = $_POST["name"];
$servicio = $_POST["corte"];

$fechaFormateada = date("d/m/y", strtotime($fecha));

// Obtener nombre del día en español
setlocale(LC_TIME, "es_ES.UTF-8"); 
$diaSemana = strftime("%A", strtotime($fecha));


$dias = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
$diaSemana = $dias[date("w", strtotime($fecha))];

$reserva = "";
foreach($tiposervicio as $elemento){
    if ($elemento->idTipo == $servicio){

        $precioNormal = $elemento->precio;
        $descuento = 0;
        $total = $precioNormal;

        
        if ($diaSemana == "Lunes" || $diaSemana == "Martes") {
            $descuento = $precioNormal * 0.15;
            $total = $precioNormal - $descuento;
        }

        
        $reserva .= "
            Servicio: <strong>" . $elemento->nombre . "</strong><br>
            Fecha seleccionada: " . $fechaFormateada . "<br>
            Día de la semana: " . $diaSemana . "<br>
            Cliente: " . $nombre . "<br>
            Precio normal: " . number_format($precioNormal, 2) . "Bs.<br>";

        if ($descuento > 0) {
            $reserva .= "Descuento (15%):" . number_format($descuento, 2) . "Bs. <br>";
        }

        $reserva .= "Total a pagar: <strong> " . number_format($total, 2) . "Bs.</strong><br>";
    }
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
            background:url('png/salon.png') no-repeat center !important;
            background-size:40px !important;
        }
        .ico-donante{
            background:url('png/salon.png') no-repeat center !important;
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
            <div class='card'>
                <?php echo $reserva; ?>
            
            </div>
        </div>
    </div>
</div>

</body>
</html>