<?php

$x = 2;
$y = &$x;

echo "$x e $y";

$y += 5;

echo "<br>$x e $y";