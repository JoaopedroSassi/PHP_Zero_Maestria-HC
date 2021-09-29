<?php

$cont = 4;
while ($cont < 30) {
   echo $cont . "<br>";

   if ($cont == 24) {
      echo "PARO!";
      break;
   }

   $cont = $cont + 2;
}