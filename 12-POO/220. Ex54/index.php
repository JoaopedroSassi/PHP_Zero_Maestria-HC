<?php

class Pessoa {
   public $nome;
   public $idade;

   function andar(){
      echo "To andando to doido";
   }
}

$joao = new Pessoa;

$joao->andar();
$joao->nome = "Joao";
$joao->idade = 18;
