<?php
// metodos estaiticos: public static function "Nome"(Parametros){  #code... }


class documento {

    private int $numero;

    // getters and setters
    
    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){

        $this->numero = $numero;
    }

    public static function validarCpf($cpf) {
        // função de validação do CPF para PHP 8.2
        

    }

}

$cpf = new documento();
$cpf->setNumero("12345678909"); 
var_dump($cpf->getNumero());



// regra de validação do CPF:


?>