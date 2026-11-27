<?php



class Mercado {

    private $frutas;
    private $verduras;
    private $legumes;
    private $produtos;


    // criando o metodo construtor

    public function __construct($a, $b, $c, $d)
    {
        $this->frutas   = $a;
        $this->verduras = $b;
        $this->legumes  = $c;
        $this->produtos = $d;
    }

    public function exibirEstoque(){
        // array para visualização:

        $armazen = array( 
            "Prateleira N° 1  "=> $this->getFrutas(),          //chave: "$this->getFrutas   |  $valor: "Prateleira N° 1"
            "Prateleira N° 2: "=> $this->getLegumes(),
            "Prateleira N° 3: "=> $this->getProdutos(),
            "Prateleira N° 4: "=> $this->getVerduras()
            
        );
          // Ordenando um Array
        sort($armazen);
        foreach($armazen as $key){
            echo "$key" . "<br>";
        }
    }

}


?>