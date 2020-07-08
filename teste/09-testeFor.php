<?php
    for ($i=0; $i <=20; $i++) { 
        echo $i." x 5 =".($i*5)."<br>";
    }

    echo "<hr>";

    $cores = array("preto", "amarelo", "verde", "azul", "rosa", "roxo", "marrom", "branco");

    foreach($cores as $indice => $valor) {
        echo $indice."-".$valor."<br>";
    }

?>