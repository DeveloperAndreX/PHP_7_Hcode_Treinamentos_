<?php
$pessoas = array();

// function the create add itens and end array:

array_push($pessoas, array(
    "nome" => "joao",
    "idade" =>  20
));

array_push($pessoas, array(
    "nome" => "Glaucio",
    "idade" => 25
));

print_r($pessoas);
echo "<br>";
print_r($pessoas[1]["idade"]);








?>