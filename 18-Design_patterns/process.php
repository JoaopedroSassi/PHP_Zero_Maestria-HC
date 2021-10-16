<?php

   include_once('db.php');
   include_once('dao/carDAO.php');

   $carDao = new CarDAO($conn);

   $brand = $_POST['brand'];
   $km = $_POST['km'];
   $color = $_POST['color'];

   $newCar = new Car();

   $newCar->setBrand($brand);
   $newCar->setKm($km);
   $newCar->setColor($color);

   $carDao->create($newCar);

   header("Location: index.php");