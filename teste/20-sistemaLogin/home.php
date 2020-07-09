<?php
    //Conexão
    require_once('db_connect.php');

    //Sessão
    session_start();

    //Verificação
    if (!isset($_SESSION['logado'])) {
        header('Location: index.php');
    }

    //Dados
    $id = $_SESSION['id_usuario'];
    $sql = "Select * from tb_usuario where id_usuario = '$id'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);

    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Restrita</title>
</head>
<body>
    <h1>Olá <?php echo $dados['nm_nome']; ?></h1>
    <a href="logout.php">Sair</a>
</body>
</html>