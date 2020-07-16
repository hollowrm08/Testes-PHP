<?php
    //Conexão
    include_once 'php_action/db_connect.php';

    //Header
    include_once 'includes/header.php';

    //Select
    if (isset($_GET['id_cliente'])) {
        $id = mysqli_escape_string($connect, $_GET['id_cliente']);

        $sql = "SELECT * from tb_cliente where id_cliente = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);

        mysqli_close($connect);
    }
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Cliente </h3>
        <form action="php_action/update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $dados['id_cliente'];?>">

            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value=" <?php echo $dados['nm_nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value=" <?php echo $dados['nm_sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value=" <?php echo $dados['nm_email']; ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value=" <?php echo $dados['nu_idade']; ?>">
                <label for="idade">Idade</label>
            </div>
            <button type="submit" class="btn" name="btn-editar">Atualizar</button>
            <a href="index.php" class="btn green">Lista de Clientes</a>
        </form>
       
    </div>

</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>