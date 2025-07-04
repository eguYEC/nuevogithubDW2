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

$totalm = (int)($_GET['total'] ?? 10000);

$tm1 = ($totalm * 50)/100;
$tm2 = ($totalm * 30)/100;
$tm3 = ($totalm * 20)/100;

for ($i =1; $i <=$totalm; $i++){
    $nro = rand(1,3);
    if ($i<$tm1){
        switch($nro){
            case 1:
                $t1++;
                $tc11++;
                break;
            case 2:
                $t2++;
                $tc12++;
                break;
            case 3:
                $t3++;
                $tc13++;
                break;
        }
    }else if ($i<$tm2 + $tm1){
        switch ($nro){
            ///ciudad2
            case 1:
                $t1++;
                $tc21++;
                break;
            case 2:
                $t2++;
                $tc22++;
                break;
            case 3:
                $t3++;
                $tc23++;
                break;
        }
    }else {
        switch ($nro){
            case 1:
                $t1++;
                $tc31++;
                break;
            case 2:
                $t2++;
                $tc32++;
                break;
            case 3:
                $t3++;
                $tc33++;
                break;
                }

    }
}

echo "TOTAL candidato 1: $t1<br>";
echo "TOTAL candidato1 ciudad1:".$tc11."<br>";
echo "TOTAL candidato1 ciudad2:".$tc21."<br>";
echo "TOTAL candidato1 ciudad3:".$tc31."<br>";
echo "TOTAL candidato2: $t2<br>";
echo "TOTAL candidato2 ciudad1:".$tc12."<br>";
echo "TOTAL candidato2 ciudad2:".$tc22."<br>";
echo "TOTAL candidato2 ciudad3:".$tc32."<br>";
echo "TOTAL candidato3: $t3<br>";
echo "TOTAL candidato3 ciudad1:".$tc13."<br>";
echo "TOTAL candidato3 ciudad2:".$tc23."<br>";
echo "TOTAL candidato3 ciudad3:".$tc33."<br>";


?>