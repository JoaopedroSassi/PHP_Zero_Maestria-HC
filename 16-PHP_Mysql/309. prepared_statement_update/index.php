<?php

$host = "localhost:3312";
$user = "root";
$pass = "";
$db = "db_vbs_spell";

$conn = new mysqli($host, $user, $pass, $db);
$id = 6;

$stmt = $conn->prepare("UPDATE tb_ranking SET acertos = ? WHERE id_jogador = ?");

$acertos = 3;

$stmt->bind_param("ii", $acertos, $id);

$stmt->execute();

if ($stms->error) {
   echo "Erro: " . $stmt->error;
} else {
   echo "TUDO NA BOA";
}

$conn->close();

