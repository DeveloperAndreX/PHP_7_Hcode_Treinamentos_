<?php
// exemplo de herança: 

class Documento {

private int $numero;

public function getNumero():int{

    return $this->numero;
    }

public function setNumero($n){

    $this->numero = $n;

    }

}

class CPF extends Documento {

    public function validar():bool{

        $numeroCPF = $this->getNumero();
        // Aqui vai a validação do CPF:
        

        return true;
    }
}










?>