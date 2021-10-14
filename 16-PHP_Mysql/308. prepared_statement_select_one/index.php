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
$item = $res->fetch_row();
print_r($item);

$conn->close();
