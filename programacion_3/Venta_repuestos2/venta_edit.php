<?php
session_start();
require_once "data.inc";

$title = "Editar Venta";

$edit_id = isset($_GET['idventa']) ? base64_decode($_GET['idventa']) : null;

$ventaEncontrada = null;

if (isset($_SESSION["sventas"])) {
    $ventas = unserialize($_SESSION["sventas"]);
    foreach ($ventas as $venta) {
        if ($venta->idventa == $edit_id) {
            $ventaEncontrada = $venta;
            break;
        }
    }
} else {
    $ventas = $listaventa;
}

if (!$ventaEncontrada) {
    echo "Venta no encontrada.";
    exit;
}

// Lista de productos
$lista = "";
foreach ($listainventario as $item) {
    $selected = ($item->idinventario == $ventaEncontrada->idinventario) ? "selected" : "";
    $lista .= "<option value='{$item->idinventario}' $selected>{$item->producto}</option>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Venta</title>
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
            margin-top:10px;
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
            width:20px;
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
    </style>
</head>
<body>
    <div class="ctn-main">
        <div class="ctn-form">
            <div class="form-header">
                <div class="ico ico-donante"></div>
                <div class="form-title">Editar Venta</div>
                <a href="venta_list.php"><div class="btn-back"></div></a>
            </div>

            <form method="POST" action="venta_update.php">
                <div class="form-content">
                    <input type="hidden" name="idventa" value="<?php echo $ventaEncontrada->idventa; ?>">

                    <div class="x-1 ctn-control">
                        <label>Nombre del Cliente</label>
                        <input type="text" name="nombre_cliente" value="<?php echo $ventaEncontrada->nombre_cliente; ?>" placeholder="Nombre del Cliente">
                    </div>

                    <div class="x-2 ctn-control">
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" value="<?php echo $ventaEncontrada->cantidad; ?>" placeholder="Cantidad" min="1">
                    </div>

                    <div class="x-2 ctn-control">
                        <label>Producto</label>
                        <select name="idinventario">
                            <?php echo $lista; ?>
                        </select>
                    </div>

                    <div class="x-1 ctn-control">
                        <label>Precio Unitario</label>
                        <input type="text" value="<?php echo $ventaEncontrada->precio_unitario; ?>" readonly>
                    </div>

                    <div class="x-1 ctn-control">
                        <label>Total de la Venta</label>
                        <input type="text" value="<?php echo $ventaEncontrada->total_venta; ?>" readonly>
                    </div>

                    <div class="x-1">
                        <input type="submit" value="Actualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>