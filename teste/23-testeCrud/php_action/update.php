<?php
    //Sessão
    session_start();

    //Conexão
    require_once 'db_connect.php';

    //Clear
    function clear($input){
        global $connect;
        //sql
        $var = mysqli_escape_string($connect, $input);
        //XSS
        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST['btn-editar'])){
        $nome = clear($_POST['nome']);
        $sobrenome = clear($_POST['sobrenome']);
        $email = clear($_POST['email']);
        $idade = clear($_POST['idade']);

        $id = clear($_POST['id']);

        $sql = "update tb_cliente set nm_nome = '$nome', nm_sobrenome = '$sobrenome', nm_email = '$email', nu_idade = '$idade' where id_cliente = '$id'";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Atualizado com Sucesso";
            header('Location: ../index.php');
        }
        else {
            $_SESSION['mensagem'] = "Erro ao Atualizar";
            header('Location: ../index.php');
        }
        mysqli_close($connect);
    }
    

?>