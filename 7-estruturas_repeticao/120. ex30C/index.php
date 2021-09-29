<?php

$vet = [];

for ($i=10; $i < 20; $i++) { 
   array_push($vet, $i);
}

for ($i=0; $i < count($vet); $i++) { 
   if ($vet[$i] % 2 == 0) {
      echo "O número $vet[$i], que está na posição $i é par <br>";
   }
}
