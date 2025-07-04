<?php
/*
Project : IMC
Author  : MacBur
*/

$title = "Donantes Compatibles";

/* Request */
$tipo = $_POST["tipo"];

$grupo1 = ""; // Donantes
$grupo2 = ""; // Receptores
switch($tipo){
    case "A+":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            A+, AB+
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            O+, O-, A+, A-
        </div>";
        break;
    case "A-":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            A+, A-, AB+, AB-
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            A-, O-
        </div>";
        break;
    case "B+":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            B+ , AB+.
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            B+ , B- , O+ , O-.
        </div>";
        break;
    case "B-":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            B+,B-,AB+,AB
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            B-,O-.
        </div>";
        break;
    case "AB+":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            AB+.
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            A+,A-,B+,B-,AB+,AB-,O+,O-.
        </div>";
        break;
    case "AB-":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
           AB+, AB-.
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            A-,B-,AB-,O-.
        </div>";
        break;
    case "O+":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            A+,B+ , AB+,O+.
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            O+ , O-.
        </div>";
        break;
    case "O-":
        $grupo1 = "<div class='card'>
            Grupos a los que puede donar sangre:<hr>
            A+,A-,B+,B-,AB+,AB-,O+,O-.
        </div>";
        $grupo2 = "<div class='card'>
            Grupos de los que puede recibir sangre:<hr>
            O-.
        </div>";
        break;
    default:
        $grupo1 = "<div class='card'>Debe elegir un grupo sanguíneo</div>";
        break;
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
            background:url('png/008-blood-test.png') no-repeat center !important;
            background-size:40px !important;
        }
        .ico-donante{
            background:url('img/donantes.png') no-repeat center !important;
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
            <?php echo $grupo1 . $grupo2 ?>
        </div>
    </div>
</div>

</body>
</html>