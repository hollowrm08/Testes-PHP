<?php

    //$Globals['variavel']
    $n1 = 10;
    $n2 = 35;

    function soma(){
        echo $GLOBALS['n1'] + $GLOBALS["n2"]."<hr>";
    }
    soma();

    //$_Server

    echo $_SERVER['PHP_SELF']."<hr>"; //Retorna o nome do arquivo script que está sendo executado
    echo $_SERVER['SERVER_NAME']."<hr>"; //Retorna o nome do host (servidor) no qual o script está rodando
    echo $_SERVER['SCRIPT_FILENAME']."<hr>"; //Retorna o caminho absoluto do script
    echo $_SERVER['DOCUMENT_ROOT']."<hr>"; //Retorna o diretorio raiz do script em execução
    echo $_SERVER['SERVER_PORT']."<hr>"; //Retorna a porta do servidor WEB
    echo $_SERVER['REMOTE_ADDR']."<hr>"; //Retorna o endereço IP onde o usuário está visualizando a página

?>