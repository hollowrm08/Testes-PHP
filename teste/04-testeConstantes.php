<?php
    //Contantes são Globais

    //define("nome da constante", "valor da constante") -> não pode haver espaços 

    define('NOME', 'Rodrigo Mello');
    define('NUMEROS', [9, 10, 120, 43] );

    echo "meu nome é: ".NOME;
    echo "<hr>"; 

    echo "o terceiro valor é: ".NUMEROS[3];
    echo "<hr>"; 

    function mostrarNome(){
        echo NOME; //Não é necessário o uso de '$'
    }

    mostrarNome();
    echo "<hr>"; 

?>