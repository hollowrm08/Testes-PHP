<?php

    $senha1 = base64_encode('123456');
    echo "Base 64 criptografia: $senha1 <br> Descriptografia: ".base64_decode($senha1)."<hr>";

    $senha2 = md5('7891011');
    echo "MD5 Criptografia: $senha2 <hr>";

    $senha3 = sha1('12131415');
    echo "Sha1 Criptografia: $senha3 <hr>";

    $options= [
        'cost' => 10 //Maior valor = maior processamento
    ];

    //              password_hash(   senha,     algoritmo   , array de opções)

    $senhaSegura1 = password_hash("123456", PASSWORD_DEFAULT, $options);
    echo "Password_hash Criptografia: $senhaSegura1 <hr>";

    //Verificação

    $senhaDB = '$2y$10$TWLF9PxnordIsCdj5aWj2e.4evj9felDakovrLlYt7IyQIUNmhoWO';

    // password_verify(senha de input, senha do banco)
    if(password_verify("123456", $senhaDB)){
        echo "Senha Válida";
    }
    else {
        echo "Senha Inválida";
    }


?>