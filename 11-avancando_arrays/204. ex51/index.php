<?php

$pes = [
   "João" => 560,
   "Mario lesto rey" => 530,
   "Beto" => -9,
   "Arnold" => 1600
];

arsort($pes);

?>

<h2>Ranking de Pontuações:</h2>
<ol>
   <?php foreach ($pes as $key => $value): ?>
      <li>Nome: <?= $key ?> | Pontuação: <?= $value?></li>
   <?php endforeach; ?>
</ol>

