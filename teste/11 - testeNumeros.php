<?php

    //number_format(valor, numeros apos o separador, separador decimal, separador mil)
    $valor = number_format(1992345.9834, 2, ",", ".");
    echo "O valor é R$: $valor";
    echo "<hr>";

    //round(valor)
    $valor2 = round(56.51);
    echo "O valor é de aproximadamente R$: $valor2";
    echo "<hr>";

    //ceil(valor)
    $valor3 = ceil(56.1);
    echo "O valor é de aproximadamente R$: $valor3";
    echo "<hr>";

    //floor(valor)
    $valor4 = floor(56.99);
    echo "O valor é de aproximadamente R$: $valor4";
    echo "<hr>";

    //rand(valor minimo, valor maximo)
    $novoValor = rand(1,47);
    echo "O valor aleatório gerado é: $novoValor";
    echo "<hr>";


?>