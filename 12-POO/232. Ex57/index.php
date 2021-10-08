<?php

class Dog{
   private $nome;
   private $raca;
   private $cor;

   public function __construct($n, $r, $c){
      $this->setNome($n);
      $this->setRaca($r);
      $this->setCor($c);
   }

   public function exibe(){
      echo "------------------------ <br>";
      echo "O nome é: " . $this->getNome() . "<br>";
      echo "A raça é: " . $this->getRaca() . "<br>";
      echo "A cor é: " . $this->getCor() . "<br>";
   }

   public function getNome(){
      return $this->nome;
   }

   public function setNome($nome){
      $this->nome = $nome;
   }

   public function getRaca(){
      return $this->raca;
   }

   public function setRaca($raca){
      $this->raca = $raca;
   }

   public function getCor(){
      return $this->cor;
   }

   public function setCor($cor){
      $this->cor = $cor;
   }
}

$coragem = new Dog("Coragem", "Vira-lata", "Marrom");
$coragem->exibe();

echo "<hr>";

$fofao = new Dog("Fofão", "Alvo", "Branco");
$fofao->exibe();
