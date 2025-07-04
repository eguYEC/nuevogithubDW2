<?php
$t1 = 0;
$t2 = 0; 
$t3 = 0;
$tc11 = 0; 
$tc12 = 0;
$tc13 = 0;
$tc21 = 0;
$tc22 = 0;
$tc23 = 0;
$tc31 = 0;
$tc32 = 0;
$tc33 = 0;
$totalSantaCruz = 0;
$totalSucre = 0;
$totalBeni = 0;

$voto = "";

$totalm = (int)($_GET['total'] ?? 10000);

$tm1 = ($totalm * 50)/100;
$tm2 = ($totalm * 30)/100;
$tm3 = ($totalm * 20)/100;

for ($i =1; $i <=$totalm; $i++){
    $nro = rand(1,3);
    
    if ($i<$tm1){
        $totalSantaCruz++;
        switch($nro){
            case 1: $t1++; $tc11++; break;
            case 2: $t2++; $tc12++; break;
            case 3: $t3++; $tc13++; break;
        }
    } else if ($i<$tm2 + $tm1){
        $totalSucre++;
        switch ($nro){
            case 1: $t1++; $tc21++; break;
            case 2: $t2++; $tc22++; break;
            case 3: $t3++; $tc23++; break;
        }
    } else {
        $totalBeni++;
        switch ($nro){
            case 1: $t1++; $tc31++; break;
            case 2: $t2++; $tc32++; break;
            case 3: $t3++; $tc33++; break;
        }
    }
}

$title = "Yo Participo";
?>
<html>
<head>
    <title><?php echo $title ?></title>
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
        .ico-donante{
            background:url('png/001-voting-box.png') no-repeat center !important;
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
            overflow-y: auto;
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
        input[type=text], select{
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
            margin-bottom: 10px;
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
                <b>TOTAL candidato 1:</b> <?php echo $t1; ?><br>
                Santa Cruz: <?php echo $tc11; ?><br>
                Sucre: <?php echo $tc21; ?><br>
                Beni: <?php echo $tc31; ?><br>
            </div>

            <div class='card'>
                <b>TOTAL candidato 2:</b> <?php echo $t2; ?><br>
                Santa Cruz: <?php echo $tc12; ?><br>
                Sucre: <?php echo $tc22; ?><br>
                Beni: <?php echo $tc32; ?><br>
            </div>

            <div class='card'>
                <b>TOTAL candidato 3:</b> <?php echo $t3; ?><br>
                Santa Cruz: <?php echo $tc13; ?><br>
                Sucre: <?php echo $tc23; ?><br>
                Beni: <?php echo $tc33; ?><br>
            </div>

            <div class='card'>
                <b>TOTALES POR CIUDAD:</b><br>
                Santa Cruz: <?php echo $totalSantaCruz; ?><br>
                Sucre: <?php echo $totalSucre; ?><br>
                Beni: <?php echo $totalBeni; ?><br>
                <br><b>TOTAL GENERAL:</b> <?php echo $totalm; ?>
            </div>

        </div>
    </div>
</div>

</body>
</html>
