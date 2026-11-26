<?php


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



/*
class Documentos_2 {

    // CPF deve ser string para não perder zeros à esquerda e aceitar pontos/traços
    private string $numero = '';

    public function getNumero(): string {
        return $this->numero;
    }

    public function setNumero($numero): void {
        // Chama o método estático para validar antes de atribuir
        $resultado = Documento::validarCpf($numero);

        if ($resultado === false) {
            throw new Exception("CPF informado não é válido.", 1);
        }

        $this->numero = (string) $numero;
    }

    public static function validarCpf($cpf): bool {
        // 1. Garante que o valor não é vazio, nem um objeto/array
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

        // 6. Cálculo dos dígitos verificadores (compatível com PHP 8.2)
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

// Testando a classe
$cpf = new Documento();
$cpf->setNumero("12345678909"); 
var_dump($cpf->getNumero());

// Você também pode chamar o método estático diretamente, sem instanciar:

//var_dump(Documento::validarCpf("123.456.789-09"));

?>


    ?>