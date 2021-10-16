<?php

   include_once ('models/Car.php');

   class CarDAO implements CarDAOInterface {

      private $conn;

      public function __construct(PDO $conn){
         $this->conn = $conn;
      }

      public function findAll(){
         $cars = [];

         $stmt = $this->conn->query("SELECT * FROM cars");

         $data = $stmt->fetchAll();

         foreach ($data as $value) {
            
            $car = new Car();

            $car->setId($value['id']);
            $car->setBrand($value['brand']);
            $car->setKm($value['km']);
            $car->setColor($value['color']);

            $cars[] = $car;
         }

         return $cars;
      }

      public function create(Car $car){

         $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

         $stmt->bindParam(":brand", $car->getBrand());
         $stmt->bindParam(":km", $car->getKm());
         $stmt->bindParam(":color", $car->getColor());

         $stmt->execute();
         
      }
   }