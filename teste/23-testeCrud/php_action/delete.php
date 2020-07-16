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

    if(isset($_POST['btn-deletar'])){
        $id = clear($_POST['id']);

        $sql = "delete from tb_cliente where id_cliente = '$id'";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Deletado com Sucesso";
            header('Location: ../index.php');
        }
        else {
            $_SESSION['mensagem'] = "Erro ao Deletar";
            header('Location: ../index.php');
        }
        mysqli_close($connect);
    }
    

?>