<?php
    /*
    3 - Escreva um programa
    Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.

    Exemplo

    Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
    Os números que não se repetem são o 4 e 7. */
    
    $arraySorteado = array();

    function numerosInterosSorteados() {

        for($i=0; $i <20; $i++)
        {
            $arraySorteado[] = rand(1, 10);
        }

        echo "[ ";
        foreach ($arraySorteado as $numero) {
            # code...
            echo $numero . ", ";
        }
        echo "]<br>";
        echo "<br>";

        $numerosIguais =  array_unique( array_diff_assoc( $arraySorteado, array_unique( $arraySorteado ) ) );
        
        echo "[ ";
        foreach ($numerosIguais as $numero) {
            # code...
            echo $numero . ", ";
        }
        echo "]<br>";
    }

    numerosInterosSorteados();

 ?>