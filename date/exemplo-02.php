<?php

// $ts_timestamp = strtotime('2001-09-01');
$ts_timestamp = strtotime("+ 1week");
echo "<br>";

echo date('l, d/m/y', $ts_timestamp);


?>