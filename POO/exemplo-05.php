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
        var_dump("DESTRUIR");   
    }

}

$meuEndereco = new Endereco("Rua Ademar saraiva Leão","123","Santos");
var_dump($meuEndereco);








?>