<?php
// Treinando classes e atributos e Metodos: 

// declarando os meus atributos dentro da classe: 

class Mercado {

    private $frutas;
    private $verduras;
    private $legumes;
    private $produtos;

// criando meus getters and setters:

    public function getFrutas():string{

        return $this->frutas;
    }

    public function setFrutas($frutas){

        $this->frutas = $frutas;

    }

    public function getVerduras():string{

        return $this->verduras;
    }

    public function setVerduras($verdura){

        $this->verduras = $verdura;

    }

    public function getLegumes():string{

        return $this->legumes;
    }

    public function setLegumes($legumes){

        $this->legumes = $legumes;

    }

    public function getProdutos():string{

        return $this->produtos;

    }

    public function setProdutos($produto){

        $this->produtos = $produto;

    }

    public function exibirEstoque(){
        // array para visualização:

        (string)$armazen = array( 
            "Prateleira N° 1  "=>$this->getFrutas(),
            "Prateleira N° 2: "=>$this->getLegumes(),
            "Prateleira N° 3: "=>$this->getProdutos(),
            "Prateleira N° 4: "=>$this->getVerduras()
            
        );
        
        return print_r(ksort($armazen));

    }
}


