<?php

class Humano{
   private $nome;
   private $idade;
   private $sexo;

   public function falar(){
      echo "Eu, $this->getNome() estou falando!";
   }

   public function getNome(){
      return $this->nome;
   }

   public function setNome($nome){
      $this->nome = $nome;
   }

   public function getIdade(){
      return $this->idade;
   }

   public function setIdade($idade){
      $this->idade = $idade;
   }

   public function getSexo(){
      return $this->sexo;
   }

   public function setSexo($sexo){
      $this->sexo = $sexo;
   }
}

class Professor extends Humano{
   private $cargo;
   private $salario;

   public function dar_nota(){
      echo "Dando notas!";
   }

   public function getCargo(){
      return $this->cargo;
   }

   public function setCargo($cargo){
      $this->cargo = $cargo;
   }

   public function getSalario(){
      return $this->salario;
   }

   public function setSalario($salario){
      $this->salario = $salario;
   }
}

$joao = new Humano;
$joao->setNome("João");
$joao->setIdade(18);
$joao->setSexo("M");
echo $joao->getNome() . "<br>";
echo $joao->getIdade() . "<br>";
echo $joao->getSexo() . "<br>";

echo "<hr>";

$mario = new Professor;
$mario->setNome("Mario");
$mario->setIdade(900);
$mario->setSexo("M");
$mario->setCargo("Professor universitário");
$mario->setSalario(8000);
echo $mario->getNome() . "<br>";
echo $mario->getIdade() . "<br>";
echo $mario->getSexo() . "<br>";
echo $mario->getSalario() . "<br>";
echo $mario->getCargo() . "<br>";
