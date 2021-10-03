<?php

$frase = "O rato roeu a roupa do rei de roma A A A";

$cont = 0;
for ($i=0; $i < strlen($frase); $i++) { 
   if ($frase[$i] === "a" || $frase[$i] === "A") {
      $cont++;
   }
}

echo "A letra a aparaceu $cont vezes na frase!";

