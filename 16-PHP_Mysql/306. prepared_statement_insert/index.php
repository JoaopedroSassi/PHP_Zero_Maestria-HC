<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_cadastro-si";

$conn = new mysqli($host, $user, $pass, $db);

$cpf = "345.649.132-05";
$nome = "Beto";
$email = "beto@excel";

$stmt = $conn->prepare("INSERT INTO tb_cliente (cpf, nome, email) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $cpf, $nome, $email);

$stmt->execute();

$conn->close();

