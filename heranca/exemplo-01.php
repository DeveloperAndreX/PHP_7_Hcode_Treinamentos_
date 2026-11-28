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

    public function validar():bool{

        $numeroCPF = $this->getNumero();

        // validação do  CPF

        return true;
    }
}

    /*
    public static function validarCpf($cpf){


        function validate($cpf){
            // 1. não e vazio:
            if(!is_scalar($cpf) OR empty($cpf)):
                return false;
            endif;

            // 2. remove qualquer caractere que não seja numero (ponto, traço, espaço)
            $cpf = preg_replace('/[^0-9]/','', (string) $cpf);

            // 3. verifica se sobrou algo apos a Limpeza e se não Ultrapassou os 11 caracteres
            if($cpf === '' OR strlen($cpf) > 11 ):
                return false;
            endif;

            // 4. Preenche com zeros a esquerda usando str_pad
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

            // 5. Verifica sequencias invalidas conhecidas
            if(preg_match('/^(\d)\1{10}$/',$cpf)):
                return false;
            endif;
            
             // 6. Calcula os Digitos Verificadores:
            
                for ($t = 9; $t < 11; $t++){
                     for ($d = 0, $c = 0; $c < $t; $c++){}
                        $d += (int) $cpf[$c] * (($t + 1) - $c);
                }

                     $d = ((10 * $d) % 11) % 10;

                    if ((int) $cpf[$c] !== $d){
                        return false;
                    }
                }

        return true;
            
        }

    }
*/

$doc = new CPF();
$doc->setNumero("111122223333-44");
var_dump($doc->validar());
echo "<br/>";
echo $doc->getNumero();





?>
