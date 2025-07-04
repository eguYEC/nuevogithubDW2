<?php

if (isset($_GET["op"])){
$semaforoV = $_GET["op"];

}
else{
    $semaforoV = "verde";
}
$semaforoH = "";

if ($semaforoV == "verde") {
    echo "semaforo vertical: 🟢<br>Semaforo Horizontal: 🔴<br>";
    echo '<br><span style="color: green;">Avanzan vehiculos en sentido Vertical</span>';
    echo '<br><span style="color: red;">Se detienen en sentido Horizontal</span>';
    $semaforoH = "rojo";

} else {
    echo "semaforo vertical: 🔴<br>Semaforo Horizontal: 🟢<br>";
    echo '<br><span style="color: green;">Avanzan vehiculos en sentido Horizontal</span>';
    echo '<br><span style="color: red;">Se detienen en sentido Vertical</span>';
    $semaforoV = "rojo";
}



?>