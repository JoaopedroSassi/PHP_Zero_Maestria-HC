<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_cadastro-si";

$conn = new mysqli($host, $user, $pass, $db);

$table = "tb_cliente";
$cpf = "345.649.132-05";
$nome = "Beto";
$email = "beto@excel";

$sql = "INSERT INTO $table (cpf, nome, email) VALUES ('$cpf', '$nome', '$email')";

$conn->query($sql);
$conn->close();