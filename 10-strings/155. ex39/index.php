<?php

function itensCaros($arr){
   $arr_itens_caros = [];

   foreach ($arr as $item => $preco) {
      
      if ($preco > 10) {
         array_push($arr_itens_caros, $item);
      }
   }

   return $arr_itens_caros;
}


$arr = [
   'Porta' => 100,
   'Maçaneta' => 5,
   'Motor' => 2000,
   'Retrovisor' => 8 
];


$novo_arr = itensCaros($arr);

print_r($novo_arr);
