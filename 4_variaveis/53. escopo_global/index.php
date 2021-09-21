<?php

$teste = "ads";
echo "$teste global 1 <br>";

if (5 > 2) {
   $teste = "dsa";
   echo "$teste if 1 <br>";
}

echo "$teste global 2 <br>";

function funcao (){

   global $teste;
   echo "$teste local <br>";
}

funcao();