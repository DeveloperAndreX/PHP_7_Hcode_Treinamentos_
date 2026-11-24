<?php
$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("l, d/m/y H:m:s");

"<br>";

$dt->add($periodo);
"<br>";

echo $dt->format("l, d/m/y H:m:s")






?>