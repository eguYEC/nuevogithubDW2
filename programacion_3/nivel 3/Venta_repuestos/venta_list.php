<?php


session_start();
require_once "data.inc";

$title = "Registro de Ventas";

$ligas = "";

if ( isset($_SESSION["sventas"]) ){
    $listaVentaTemp = unserialize($_SESSION["sventas"]);
}else{
    $listaVentaTemp = $listaventa;
}

foreach($listaVentaTemp as $elemento){
    if ($elemento === null) continue;
    $idventa = base64_encode($elemento->idventa);
    $ligas .= "<div class='card'>N°:". $elemento->idventa."<br> Nombre:".$elemento->nombre."<br>
        Producto:".$elemento->producto."<br>Cantidad: ".$elemento->cantidad."<br>
        Fecha: ".$elemento->fecha."
        <a href='venta_edit.php?idventa=". $idventa ."'><div class='btn-edit'></div></a>
        <a href='venta_delete.php?idventa=". $idventa ."'><div class='btn-delete'></div></a>
    </div>";
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
            background:url('img/calculadora.png') no-repeat center !important;
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

        .ctl-button{
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
            line-height:40px;
            margin-top:10px;
        }
        .ctl-button:hover{
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
        a{
            text-decoration: none;
        }
        .btn-back{
            position: absolute;
            top:20px;
            right:10px;
            width:30px;
            height:40px;
            background:rgba(0,0,0,0.5) url('img/back.png') no-repeat center;
            background-size: 20px;
            border-radius:10px;
            cursor:pointer;
        }
        .btn-back:hover{
            background:rgb(81, 89, 126) url('img/back.png') no-repeat center;
            background-size: 20px;
        }

        .btn-edit{
            position: absolute;
            top:5px;
            right:50px;
            width:30px;
            height:30px;
            background:rgba(0,0,0,0.5) url('img/edit.png') no-repeat center;
            background-size: 16px;
            border-radius:10px;
            cursor:pointer;
        }
        .btn-edit:hover{
            background:rgb(81, 89, 126) url('img/edit.png') no-repeat center;
            background-size: 16px;
        }

        .btn-delete{
            position: absolute;
            top:5px;
            right:10px;
            width:30px;
            height:30px;
            background:rgba(0,0,0,0.5) url('img/delete.png') no-repeat center;
            background-size: 16px;
            border-radius:10px;
            cursor:pointer;
        }
        .btn-delete:hover{
            background:rgb(81, 89, 126) url('img/delete.png') no-repeat center;
            background-size: 16px;
        }

        .btn-add{
            position: absolute;
            bottom:10px;
            right:10px;
            width:50px;
            height:50px;
            background:rgba(0,0,0,0.5) url('img/add.png') no-repeat center;
            background-size: 26px;
            border-radius:10px;
            cursor:pointer;
        }
        .btn-add:hover{
            background:rgb(81, 89, 126) url('img/add.png') no-repeat center;
            background-size: 26px;
        }
    </style>
</head>
<body>

<div class='ctn-main'>
    <div class='ctn-form'>
        <div class='form-header'>
            <div class='ico ico-donante'></div>
            <div class='form-title'><?php echo $title ?></div>
            <a href='index.php'><div class='btn-back'></div></a>
        </div>
        <div class='form-content'>
            <!-- Contenido del Formulario -->
            <form action='resultado.php' method='POST'>
            <?php echo $ligas ?>
            <a href='venta_new.php'><div class='btn-add'></div></a>
            </form>
        </div>
    </div>
</div>

</body>
</html>