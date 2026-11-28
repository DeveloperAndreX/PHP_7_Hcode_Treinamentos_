<?php
// exemplo de herança: 

class Documento {

private int $numero;

public function getNumero():int{

    return $this->numero;
    }

public function setNumero($n){

    $resultado = Documento::validarCpf($n);
        if($resultado === false):
            // lançando o throw New Exception:
            throw new Exception("Cpf informado não e Valido", 1);
endif;


    $this->numero = $n;

    }

}

class CPF extends Documento {

    public function validar() {

        $numeroCPF = $this->getNumero();
        // Aqui vai a validação do CPF:
        

    // função de validação do CPF para PHP 8.2

    function validarCPF($cpf): bool {
    // 1. Garante que o valor não é vazio, nem um objeto/array (evita o Fatal Error anterior)
    if (!is_scalar($cpf) || empty($cpf)) {
        return false;
    }

    // 2. Remove qualquer caractere que não seja número (pontos, traços, espaços)
    $cpf = preg_replace('/[^0-9]/', '', (string) $cpf);

    // 3. Verifica se sobrou algo após a limpeza e se não ultrapassou 11 dígitos
    if ($cpf === '' || strlen($cpf) > 11) {
        return false;
    }

    // 4. Preenche com zeros à esquerda até completar 11 dígitos
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // 5. Verifica sequências inválidas conhecidas (ex: 11111111111)
    if (preg_match('/^(\d)\1{10}$/', $cpf)) {
        return false;
    }

    // 6. Cálculo dos dígitos verificadores (com colchetes compatíveis com PHP 8.2)
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += (int) $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ((int) $cpf[$c] !== $d) {
            return false;
        }
    }

    return true;

    }

  }

}

?>