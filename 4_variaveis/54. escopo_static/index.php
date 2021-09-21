<?php

function alo(){

   $a = 0;
   $a++;

   echo "$a <br>";
}
alo();
alo();
alo();

echo "<br>";

function ala(){

   static $a = 0;
   $a++;

   echo "$a <br>";
}
ala();
ala();
ala();