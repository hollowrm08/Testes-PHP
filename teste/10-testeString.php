<?php
    //strtoupper(mensagem)
    $Nome = strtoupper("rodrigo mello");
    echo $Nome;
    echo"<hr>";

    //strtolower(mensagem)
    $nome = strtolower("RODRIGO MELLO");
    echo $nome;
    echo"<hr>";

    //substr(string, posicao, quantidade)
    $mensagem = substr("ola mundo", 4, 4);
    echo $mensagem;
    echo"<hr>";

    //str_pad(mensagem, numero desejado, caracteres a serem adicionados)
    $novoObjeto = str_pad("mouse", 9, '!');
    echo $novoObjeto;
    echo"<hr>";

    //strlen(mensagem)
    $quantidade = strlen("Conte quantos caracteres tem aqui.");
    echo "Caracteres: ".$quantidade;
    echo"<hr>";

    //str_replace(string a substituir, nova string, mensagem)
    $novaMensagem = str_replace("Argentina", "Brasileira", "A seleceção Argentina irá ganhar a copa");
    echo $novaMensagem;
    echo"<hr>";

    // strpos(mensagem, string a ser encontrada)
    $posicao = strpos("ache ESTA palavra", "ESTA");
    echo $posicao;
    echo"<hr>";

?>