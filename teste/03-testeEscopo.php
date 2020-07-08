<?php

//Escopo Global
$nome = "Rodrigo Mello";

function mostrarNome (){
    global $nome;         //"declaração"
    echo "Nome: $nome";

}

mostrarNome(); //Funcionou pois, dentro da função foi declarado a variavel nome

echo "<hr>";

function mostrarIdade (){
    global $idade;
    $idade = 17;
}

mostrarIdade();

echo $idade;
echo "<hr>";

//Escopo Global
$num1 = 7;
$num2 = 8;
$num3 = 13;

function soma (){
    echo "O resultado é: ".($GLOBALS['num1'] + $GLOBALS['num2'] + $GLOBALS['num3']);

}

soma();
?>