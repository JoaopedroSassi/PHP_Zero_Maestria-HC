<?php

$n1 = 63;
$n2 = "João";

if (is_int($n1)) {
   echo "Eba, $n1 ele é int!<br>";

   $res = $n1 * 2;
   if ($res >= 100) {
      echo "Eita, o $res é maior ou igual a 100!<br>";
   } else {
      echo "Vish, o $res n é maior que 100 <br>";
   }
} else {
   echo "Opa, não é um inteiro <br>";
}

if (is_int($n2)) {
   echo "Eba, $n1 ele é int!<br>";

   $res = $n1 * 2;
   if ($res >= 100) {
      echo "Eita, o $res é maior ou igual a 100!<br>";
   } else {
      echo "Vish, o $res n é maior que 100 <br>";
   }
} else {
   echo "Opa, não é um inteiro <br>";
}