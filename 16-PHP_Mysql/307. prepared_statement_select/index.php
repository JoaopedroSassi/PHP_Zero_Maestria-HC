<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_vbs_spell";

$conn = new mysqli($host, $user, $pass, $db);

$acertos = 5;

$stmt = $conn->prepare("SELECT * FROM tb_ranking WHERE acertos > ?");

$stmt->bind_param("i", $acertos);

$stmt->execute();

$res = $stmt->get_result();
$data = $res->fetch_all();
print_r($data);

$conn->close();

