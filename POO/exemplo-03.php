<?php
// Treinando classes e atributos e Metodos: 

// declarando os meus atributos dentro da classe: 

class Mercado {

    private $frutas;
    private $verduras;
    private $legumes;
    private $produtos;

// criando meus getters and setters:

    public function getFrutas(){

        return $this->frutas;
    }

    public function setFrutas($frutas){

        $this->frutas = $frutas;

    }

    public function getVerduras(){

        return $this->verduras;
    }

    public function setVerduras($verdura){

        $this->verduras = $verdura;

    }

    public function getLegumes(){

        return $this->legumes;
    }

    public function setLegumes($legumes){

        $this->legumes = $legumes;

    }

    public function getProdutos(){

        return $this->produtos;

    }

    public function setProdutos($produto){

        $this->produtos = $produto;

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

// Instanciando a Classe mercado;

$market = new Mercado();
$market->setFrutas("Banana");                 //setFrutas acessa o meu metodo
$market->setLegumes("Alface Crespa");
$market->setProdutos("Farinha de Trigo");
$market->setVerduras("Pepino Japonês");

// exibindo individualmente:

echo "<ol>" . $market->getFrutas()    ."</ol>" . "<br>";
echo "<ol>" . $market->getLegumes()   ."</ol>" . "<br>";
echo "<ol>"  . $market->getProdutos() ."</ol>" . "<br>";
echo "<ol>"  . $market->getVerduras() ."</ol>" . "<br>";

echo "<br><br>";
echo "<hr>";

//echo $market->exibirEstoque();




