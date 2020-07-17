<?php 
    $arquivo = 'arquivo.txt';
    $conteudo = "Conteudo de Teste\r\n";

    $tamanhoArquivo = filesize($arquivo); // Retorna o tamanho do arquivo

    //abre o arquivo -> fopen(nome do arquivo, mode de abertura)
    $arquivoAberto = fopen($arquivo, 'r');

    //escreve no arquivo especificado
    //fwrite($arquivoAberto, $conteudo);

    while (!feof($arquivoAberto)) { //Enquanto não for "o fim do arquivo"
        // retorna as linhas do arquivo
        //       fgets(arquivo, tamanho)
        $linha = fgets($arquivoAberto, $tamanhoArquivo);
        echo $linha;    
    }

    fclose($arquivoAberto);

    /*
        Modos de Abertura

        ‘r’ Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

        ‘r+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

        ‘w’ Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

        ‘w+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

        ‘a’ Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

        ‘a+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

        ‘x’ Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

        ‘x+’ Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.


    */
?>