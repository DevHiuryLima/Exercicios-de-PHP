<?php
    /*
    2 -Função Primos($inicial,$final)
    Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro. 

    Exemplo para teste:

    Numero Inicial = 10
    Número Final = 29
    Resposta: Array [11,13,17,19,23] */

    $numeroInicial = 10;
    $numeroFinal = 29;

    function retornaNumerosPrimo($inicial, $final) {
        for($i = $inicial; $i <= $final; $i++)
        {
            $divisores = 0;
            for($j = $i; $j >= 1; $j--)
            {
                if (($i % $j) == 0) {
                    $divisores++;
                }
            }
            
            if ($divisores == 2)
            {
                echo $i . ', ';
            }
        }
    }

    retornaNumerosPrimo($numeroInicial, $numeroFinal);  
 ?>