<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2003, 12, 12);
$dataB->setTime(01, 10, 10);

if ($dataA > $dataB) {
   echo "Data A maior que B <br>";
} else {
   echo "Data B maior que A <br>";
}

if ($dataB > $dataA ) {
   echo "Data B maior que A <br>";
} else {
   echo "Data A maior que B <br>";
}

$dataC = new DateTime();
$dataC->setDate(2003, 12, 12);
$dataC->setTime(01, 10, 10);

if ($dataB == $dataC) {
   echo "B === C! <br>";
}