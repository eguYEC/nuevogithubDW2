<?php
$c1=0;
$c2=0;
$c3=0;
$total = $_GET["total"];

for($i=1; $i<=$total; $i++){
   $voto = rand(1, 3);
   switch($voto){
      case 1:
         $c1++;
         break;
      case 2:
         $c2++;
         break;
      case 3:
         $c3++;
         break;


   }


}
echo ("Total de votos:<br>
      Candidato 1:".$c1.
      "<br>Candidato 2:".$c2.
      "<br>Candidato 3:".$c3);

?>