<?php

$cinco_dias = strtotime("5 days");
echo $cinco_dias . "<br>";

$dez_dias = strtotime("10 days");
echo $dez_dias . "<br>";

$data_atual_mais_cinco = date('d/m/y', $cinco_dias);
echo $data_atual_mais_cinco . "<br>";
