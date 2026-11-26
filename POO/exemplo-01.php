<?php
/** Conceitos de Programação Orientada a Objetos Aula: 41 */

// so quem cosengue ver o que esta Privado (Private), e o que esta dentro da propria classe;
/**
 * Classes - Organização do seu codigo:
 * Atributos e Metodos
 * Uma classe e um conjunto de Atributos e Metodos; 
 * 
 * Toda Vez que criarmos a classe, na hora de usar devemos Instancia-la;
 * 
 * O que é um Objeto? R: o objeto nada mais e que uma variavél que representa, ou tira uma copia da classe; 
 * É uma variavel que representa uma classe.
 * 
 * classe começa com a primeira letra Maiuscula
 * 
 */

// Minha primeira Classe:

class Pessoa {

    public $nome; // Atributo

    // criando nossa primeira função:
    public function falar(){ // Metodo
        
        return "O meu nome  e:  " . $this->nome;

    }

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

// Instanciando a classe 

?>


