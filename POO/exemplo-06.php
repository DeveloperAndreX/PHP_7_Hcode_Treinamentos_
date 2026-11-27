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

    public function getFrutas():string{
        if(isset($this->frutas)):
            return $this->frutas;
        else:
            throw new Exception("ATRIBUTO NÃO DEFINIDO", 1);
        endif;
    }

    public function getVerduras():string{

        return $this->verduras;
    }

    public function getLegumes():string{

        return $this->legumes;
    }

    public function getProdutos():string{

        return $this->produtos;
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