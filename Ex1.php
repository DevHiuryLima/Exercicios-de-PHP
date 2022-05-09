<?php 
    /* 1 - Função SeculoAno($ano)
    Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

    Exemplos para teste:

    Ano 1905 = século 20
    Ano 1700 = século 17 */
    

    $ano = 1700;

    function retornaSeculoDeUmAno($ano) {
        $seculo = 0;
        for ($i=1; $i <=$ano ; $i+=100) { 
            $seculo++;
        }
        echo "Século " . $seculo . ".<br>";
    }

    retornaSeculoDeUmAno($ano);
?>