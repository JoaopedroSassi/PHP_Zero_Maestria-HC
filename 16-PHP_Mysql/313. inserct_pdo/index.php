<?php
   $host = "localhost:3312";
   $user = "root";
   $pass = "";
   $db = "db_curso_php";

   $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

   $stmt = $conn->prepare("INSERT INTO pessoas VALUES (:nome, :idade)");

   $nome = "João";
   $idade = 19;

   $stmt->bindParam(":nome", $nome);
   $stmt->bindParam(":idade", $idade);

   $stmt->execute();