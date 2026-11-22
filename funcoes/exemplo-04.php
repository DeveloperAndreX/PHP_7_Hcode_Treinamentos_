<?php
// ela vai recuperar e retornar em um array  todos os argumentos que forem passados pra função.
function ola(){

$argumentos = func_get_args();  

return $argumentos;
}

var_dump(ola("bom dia", 10));





?>