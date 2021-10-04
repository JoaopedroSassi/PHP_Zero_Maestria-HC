<?php

$pessoas = [
   "João" => 18,
   "Matheus" => 26,
   "Beto" => 956,
   "Mario leston rey" => 4
];

?>

<table border="1">
   <tr>
      <th>Nome</th>
      <th>Idade</th>
   </tr>
   <?php foreach ($pessoas as $key => $value): ?>
      <tr>
         <td><?= $key; ?></td>
         <td><?= $value; ?></td>
      </tr>
   <?php endforeach; ?>
</table>
