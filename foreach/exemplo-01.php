<?php
// Foreach e usado para percorrer Arrays e Coleções:

$meses = array(
 "Janeiro","Fevereiro", "Março",
 "Abril","Maio", "Junho","Julho",
 "Agosto","Setembro","Outubro",
 "Novembro", "Dezembro"
);

foreach($meses as $index => $mes){
    echo "Indice: " . $index . "<br>";
    echo " O mês e: " . $mes . "<br>";
    
}

// Ele vai criar uma variavel para cada. 



?>