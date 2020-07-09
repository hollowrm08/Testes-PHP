<?php
    //Conexão com Banco de Dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "sistemalogin";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()){
        echo "Falha ao conectar: ".mysqli_connect_error();
    }
?>