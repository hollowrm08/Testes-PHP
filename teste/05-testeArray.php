<?php
    //Formas de Criar um array
    $carros = ['chave' => 'valor','palio', 'monza'];
    $jogos = array('chave' => 'valor', 'zero' => 'stardew valley', 'um' => 'devil may cry');

    //Formas de adicionar
    $jogos[] = 'gta V';

    //Formas de Printar

    print_r($jogos);
    echo "<hr>";

    //Count
    echo "numero de itens do array carros:".count($carros);
    echo "<hr>";

    //Foreach

    foreach ($jogos as $valor ) {
        echo $valor."<br>";
    }
    echo "<hr>";

    //Array Associativo
    $dados = array("nome" => "Rodrigo", "altura" => "1.83", "idade"  => 17);
    foreach ($dados as $key => $value) {
        echo $key.": ". $value . "<br>";
    }

    echo "<hr>";
    echo "<hr>";

    //Funções
    echo "Verifica se determinado valor aparece em determinado array: ".
    in_array("stardew valley", $jogos); 
    echo "<hr>";

    echo "Cria um nome array com as feito com as chaves de um array especificado: ";
    $keys = array_keys($jogos); //Se substituir a palavra "$keys" por "$values" é criado um array com os valores
    print_r($keys); 
    echo "<hr>";

    echo "A função pop exclui a ultima chave e valor do array <br>";
    echo "array_pop('nome do array')";
    echo "<hr>";

    echo "A função shift exclui a primeira chave e valor do array <br>";
    echo "shift_pop('nome do array')";
    echo "<hr>";

    echo "a função push adiciona 1 ou mais elemento no array especificado <br>";
    echo "array_push('nome do array', 'valor1', 'valor2', 'valor 3') <br>";
    echo ">>se substituirmos o 'push' por unshift os valores serão adicionados no inicio do array";

?>