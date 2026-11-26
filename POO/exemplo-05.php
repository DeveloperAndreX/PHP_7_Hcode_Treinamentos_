<?php
// Metodo construtor:

class Endereco {

private $logadouro;
private $numero;
private $cidade;

// getters and setters:

public function __construct(string $a, string $b, string $c)

    {
        $this->logadouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        
    }

    public function __destruct()
    {
        //var_dump("DESTRUIR");   
    }

    // Metodo Magico ToString:
    public function __toString()
    {
        return $this->logadouro . ", " . $this->numero . ", " . $this->cidade;
    }

}
$meuEndereco = new Endereco("Rua Ademar saraiva Leão","123","Santos");

echo $meuEndereco;
unset($meuEndereco);








?>