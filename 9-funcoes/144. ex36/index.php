<?php

function maiorSete($v){
   $novo_vet = [];

   for ($i=0; $i < count($v); $i++) { 
      if ($v[$i] > 7) {
         array_push($novo_vet, $v[$i]);
      }
   }

   return $novo_vet;
}

$vet = [5, 9, 4, 2, 4, 3, 1, 0, 98, 2, 46, 2, 47, 8, 1];

$res = maiorSete($vet);

print_r($res);

