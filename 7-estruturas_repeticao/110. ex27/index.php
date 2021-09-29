<?php

$vet = ["joão", "pedro", 6, true, 95, "sassi", "granado", false, 3.498, 964, "kamila", "string", true];

$cont = 1;
while ($cont <= 12) {
   if (is_string($vet[$cont])) {
      echo "Valor $vet[$cont] é uma string! <br>";
   }

   $cont += 1;
}