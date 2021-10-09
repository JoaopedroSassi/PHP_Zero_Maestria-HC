<?php

$data_nasc = mktime(02, 12, 33, 12, 12, 2003);
echo $data_nasc . "<br>";

$data_nasc_for = date('d/m/Y', $data_nasc);
echo $data_nasc_for . "<br>";
