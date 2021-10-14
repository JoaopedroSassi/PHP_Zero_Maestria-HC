<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_vbs_spell";

$conn = new mysqli($host, $user, $pass, $db);
$id = 6;

$stmt = $conn->prepare("DELETE FROM tb_ranking WHERE id_jogador = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

if ($stmt->error) {
   echo "Erro: " . $stmt->error;
} else {
   echo "TUDO NA BOA";
}

$conn->close();

