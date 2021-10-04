<?php

$nome = "gata";
$cor = "Malhada";
$femea = true;
$macho = false;
$patas = 4;

$gato = compact("nome", "cor", "femea", "macho", "patas");

foreach ($gato as $carac => $value){
   echo "$carac: $value <br>";
}