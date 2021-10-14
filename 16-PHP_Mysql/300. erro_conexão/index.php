<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_curso_php";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
   echo "Erro na conexão! <br>";
   echo "Erro: " . $conn->connect_error;
} else {
   echo "Conexão boa!";
}