<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #222;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background-color: #789;
            padding: 20px;
            border-radius: 10px;
            border: 10px solid #f5f7f9;
            box-shadow: 0 0 10px #000;
        }
        .header {
            background-color: #333;
            padding: 15px;
            color: white;
            font-size: 20px;
            border-radius: 8px;
            text-align: center;
            position: relative;
        }
        .header img {
            width: 30px;
            vertical-align: middle;
            margin-right: 10px;
        }
        .button {
            display: block;
            margin: 15px auto;
            padding: 15px;
            background-color: #4a4e76;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            width: 90%;
            transition: background 0.3s;
        }
        .button:hover {
            background-color: #3b3f5f;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="nano.png"Logo">
        Menú Principal
    </div>

    <a href="monedas/index.php" class="button">Cambio de Monedas</a>
    <a href="donantes/index.php" class="button">Donantes de Sangre</a>
    <a href="votocomplejo/index.php" class="button">Voto Complejo</a>
    <a href="interes/index.php" class="button">Interes</a>
    <a href="depreciacion/index.php" class="button">Calculo de Depreciacion</a>

</div>

</body>
</html>
