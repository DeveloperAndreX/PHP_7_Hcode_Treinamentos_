<?php

class Documento {

    private  $numero;


    // getters and Setters

    public function getNumero(){

        return $this->numero;
    }

    public function setNumero($n){

        $this->numero = $n;

    }
}

class CPF extends Documento {





}


$doc = new CPF();
$doc->setNumero("111122223333-44");
echo $doc->getNumero();




?>
