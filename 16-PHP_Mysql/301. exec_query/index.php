<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_cadastro-si";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM tb_cliente";
$res = $conn->query($sql);

print_r ($res) . "<br>";

$conn->close();