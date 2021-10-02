<?php

function listaMercado($v){
   $str = "Você levou estes itens do mercado: ";

   for ($i=0; $i < count($v); $i++) { 
      if ($i + 1 == count($v)) {
         $str .= "$v[$i].";
      } else {
         $str .= "$v[$i], ";
      }
   }

   return $str;
}

$vet = ["Arroz", "Picanha", "Milho", "Alface", "Rabanete", "Acnho", "Chuleta"];


echo listaMercado($vet);
