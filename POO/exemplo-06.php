<?php



class Mercado {

    private string $frutas;
    private string $verduras;
    private string $legumes;
    private string $produtos;


    // criando o metodo construtor

    public function __construct(string $a, string $b, string $c, string $d)
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

    public function __toString()
    {       
        return ucwords("Prateleira 1: ") . $this->frutas . "<br>" . ucwords("Prateleira 2: ") . $this->verduras . "<br>" . ucwords("Prateleira 3: ")  . $this->legumes . "<br>" . ucwords("Prateleira 4: ") . $this->produtos . "<br><br>";
        
          

    }

    public function __destruct()
    {
       // echo "DESTRUIU";
    }
    

}

class Estoque extends Mercado {


}

$market = new Mercado("Banana", "Pepino Japonês", "Alface Crespa", "Tomate Enlatado");

echo $market;

echo "<hr>";
?>