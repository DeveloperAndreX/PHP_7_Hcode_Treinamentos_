<?php
// Interface: quais são os metodos, quais são os parametros, e qual o tipo de encapsulamento que precisa ter.

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocaMarcha($marcha);

}

class civic implements Veiculo {

    public function acelerar($velocidade){
        echo "O veiculo acelerou até: " . $velocidade . "KM/h";
    }
    public function frenar($velocidade){
        echo "O veiculo frenou até: " . $velocidade . "KM/h";
    }
    public function trocaMarcha($marcha){
        echo "O veiculo engatou a marcha: " . $marcha . "a uma velocidade";
        
    }
    
}

$carro = new Civic();
$carro->trocaMarcha(1);
echo "<br>";
$carro->acelerar(100);
echo "<br>";
$carro->frenar(2);
















?>