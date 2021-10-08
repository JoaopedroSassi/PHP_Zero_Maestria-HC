<?php

class Dog{
   function latir(){
      echo "au au au<br>";
   }

   function andar(){
      echo "andei<br>";
   }
}

$coragem = new Dog;
$coragem->andar();
$coragem->latir();

$fofao = new Dog;
$fofao->andar();
$fofao->latir();
