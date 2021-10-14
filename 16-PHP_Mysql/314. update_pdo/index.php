<?php
   $host = "localhost:3312";
   $user = "root";
   $pass = "";
   $db = "db_curso_php";

   $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
   $nome = "João bão";
   $idade = 19;

   $stmt = $conn->prepare("UPDATE pessoas SET nome = :nome WHERE idade = :idade");

   $stmt->bindParam(":nome", $nome);
   $stmt->bindParam(":idade", $idade);

   $stmt->execute();