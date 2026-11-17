<?php
// Condição de treino com IF:
(string)$frase = ucwords("Você está desempregado");
(float)$salario =  0;

(float)$ganhaPouco = 1299;
(float)$ganhaSalarioMinimo = 1619; 
(float)$ganhaMedio = 3500;
(float)$ganhaMuito = 5500;

if(isset($salario) <= $ganhaPouco):
        echo "Você ganha Menos que $ganhaPouco.! você ganha aproximadamente: " . "R$ $salario  em reais <br>";
        echo strtoupper("trabalhe mais!");
    elseif($salario > $ganhaPouco && $salario == $ganhaSalarioMinimo):
        echo "Você ganha o que a maioria dos brasileiros ganha, cerca de R$ $ganhaSalarioMinimo reais " . "<br>";
        echo strtoupper("você chega lá!"); 
        elseif($salario >= $ganhaMedio):
            echo strtoupper("parabens!") . "<br>";
            echo ucwords("Você ganha melhor agora, esta na Classe Media!");
            elseif($salario >= $ganhaMuito):
                echo strtoupper("parabens, você esta ganhando muito bem aqui no brasil!") . "<br>";
                echo "Valeu o esforço";
                elseif($salario === 0  || $salario == NULL):
                echo $frase;
                
            else:
                echo ucfirst("você não possui salario para receber");

            endif;

// ternario de salario: 
echo "<br><br>";

echo $salario > $ganhaSalarioMinimo?"ganha mais que um salario minimo, legal" : "Você ganha abaixo de um salario minimo, TRABALHE MAIS CAMARADA!";
echo "<br><br>";











?>