<?php

$pessoa = ['nome' => 'João', 'idade' => 20, 'Altura' => 1.75];

print_r($pessoa);
echo "<br>";
if ($pessoa['idade'] >= 18 ) {
   echo "E, é maior de idade";
} else {
   echo "E, não é maior de idade";
}