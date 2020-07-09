<!-- PHP -->

<?php
    //Conexão
    require_once ('db_connect.php');

    //Sessão
    session_start();

    if(isset($_POST['btn-entrar'])){
        $erros = array();

        //Armazenar informações para script sql(conexão ,  variável)
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($login) or empty($senha)){
            $erros[] = "<li> Os campos de login e senha precisam ambos serem preenchidos </li>";
        }
        else {
            $sql = "SELECT nm_login from tb_usuario where nm_login = '$login'";

            //Consulta no banco (conexão , script sql)
            $resultado = mysqli_query($connect, $sql);

            //Verificação dos dados de login
            if(mysqli_num_rows($resultado) > 0){
                $senha = md5($senha);
                $sql = "select * from tb_usuario where nm_login = '$login' and nm_senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1){
                    // Converte o retorno sql em um array
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);

                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id_usuario'];
                    
                    header('Location: home.php');
                }
                else {
                    $erros[] = "<li> Usuário e senha não conferem</li>";
                }
            }
            else {
                $erros[] = "<li> Usuário inexistente </li>";
            }


        }
    }
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <!-- Formulario -->
    <h1>Login</h1><hr>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        Login: <input type="text" name="login"><br>

        Senha: <input type="password" name="senha"><br>

        <button type="submit" name="btn-entrar">Entrar</button>
    </form>

    <!-- Verificação de Erros -->

    <?php 
        if(!empty($erros)){
            foreach ($erros as $erro) {
                echo $erro;
            }
        }
    ?>
    
</body>
</html>