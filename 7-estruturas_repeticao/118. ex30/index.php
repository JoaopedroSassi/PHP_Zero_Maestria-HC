<?php

$vet = [19, 10, 6, 20, 7, 14, 15, 3, 9, 5, 2, 4];

for ($i=0; $i < count($vet); $i++) { 
   if ($vet[$i] % 2 == 0) {
      echo "Vetor[$i] com valor $vet[$i] é par! <br>";
   }
}