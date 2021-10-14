<?php
   $host = "localhost:3312";
   $user = "root";
   $pass = "";
   $db = "db_curso_php";

   $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
   
   $stmt = $conn->prepare("SELECT * FROM pessoas WHERE idade = :idade");

   $idade = 19;

   $stmt->bindParam(":idade", $idade);

   $stmt->execute();

   $data = $stmt->fetch(PDO::FETCH_ASSOC);
   print_r($data);

   echo "<br>";

   $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
   print_r($itens);