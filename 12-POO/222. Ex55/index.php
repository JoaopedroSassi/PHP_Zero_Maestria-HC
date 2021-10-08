<?php

class Car{
   public $cor;
   public $teto_solar;
   public $velocidade_max;

   function setvelocidadeMax($vel){
      $this->velocidade_max = $vel;
   }

   function getvelocidadeMax(){
      echo "A velocidade máxima desse carro é: $this->velocidade_max km/h <br>";
   }
}

$bmw = new Car;
$bmw->cor = "Preta";
$bmw->teto_solar = true;
$bmw->setvelocidadeMax(150);
$bmw->getvelocidadeMax();