<?php

class Carro {
    private $modelo;
    private $motor;
    private $ano;


    // Getters and Setters: 
    // Pra cada um desses atributos vamos ter 2 metodos, uma pra pegar o valor, e outro pra definir o valor:

    public function getModelo(){

        return $this->modelo;

    }

    public function setModelo($modelo){

        $this->modelo = $modelo;

    }

    public function getMotor(){

        return $this->motor;
    }

    public function setMotor($motor){

        $this->motor = $motor;
    }

    public function getAno(){

        return $this->ano;
    }

    public function setAno($ano){

        $this->ano = $ano;
    }

    public function exibir(){

        return array(
            "Modelo"=>$this->getModelo(),
            "Motor"=>$this->getMotor(),
            "Ano de Fabricacao"=>$this->getAno()

        );

    }

}

// Instanciando a Nossa Classe:













?>