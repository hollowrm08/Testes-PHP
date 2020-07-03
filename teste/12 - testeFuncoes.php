<?php
    function calcularMedia($nome, $matricula, $n1, $n2, $n3){
        $media = number_format(($n1 + $n2 + $n3) / 3, 2, ",", ".");
        if($media <6){
            echo "O aluno $nome de matricula $matricula foi reprovado com média igual a $media";
        }
        elseif ($media == 6) {
            echo "O aluno $nome de matricula $matricula ficou em recuperação com média igual a $media";
        }
        else {
            echo "O aluno $nome de matricula $matricula foi aprovado com média igual a $media";
        }
        echo "<hr>";
    }

    calcularMedia("Rodrigo", "0459", 9, 2, 4);
    calcularMedia("Iury", "0458", 6, 6, 6);
    calcularMedia("João", "0460", 10, 9, 10);


?>