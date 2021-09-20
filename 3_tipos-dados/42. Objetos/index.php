<?php

class pessoa{
   function falar(){
      echo "Olá pessoal!";
   }
}

$matheus = new pessoa;

$matheus->nome = "Matheus";

echo $matheus->nome;

echo "<br>";

$matheus->falar();