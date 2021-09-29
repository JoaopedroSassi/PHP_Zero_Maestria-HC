<?php

$vet = [10, 65, 49, 26, 95, 31, 48, 15, 10, 100, 36, 8, 30, 4, 40, 34];

$cont = 0;
$posic = count($vet);
while ($cont < $posic) {
   if ($vet[$cont] == 30 || $vet[$cont] == 40) {
      $cont += 1;
      continue;
   }

   echo "Vetor posição $cont tem o valor $vet[$cont] <br>";

   $cont += 1;
}
