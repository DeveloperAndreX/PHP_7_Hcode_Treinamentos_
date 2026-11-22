<?php
$pessoas = array(
    'nome' => 'joao',
    'idade' => 20
);

foreach ($pessoas as &$value) {
    // se gettype(retorna o tipo de dado da minha variavel);
    if(gettype($value) === 'integer') $value+=10;
    {

    } 
      echo $value . "<br>";

}

print_r($pessoas);





?>