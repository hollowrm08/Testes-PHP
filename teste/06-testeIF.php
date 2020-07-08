<?php
    $media = 7;

    if ($media == 6) {
        echo "passou por um triz";
    }elseif($media >6){
        echo "aprovado";

    }
    else {
        echo "não foi aprovado";
    }

    echo "<hr>";

    $valor = 12200;

    echo $valor>1000? "fora do orçamento" : "dentro do orçamento";

?>