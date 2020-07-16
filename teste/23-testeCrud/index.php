<?php
    //Conexão
    include_once 'php_action/db_connect.php';

    //Header
    include_once 'includes/header.php';

    //Mensagem
    include_once 'includes/message.php';

?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th> Nome:</th>
                    <th> Sobrenome:</th>
                    <th> Email:</th>
                    <th> Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "select * from tb_cliente";
                    $resultado = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($resultado)>0){


                        while ($dados = mysqli_fetch_array($resultado)) {
                        
                    
                ?>
                <tr>
                    <td> <?php echo $dados['nm_nome']; ?> </td>
                    <td> <?php echo $dados['nm_sobrenome']; ?> </td>
                    <td> <?php echo $dados['nm_email'] ?> </td>
                    <td> <?php echo $dados['nu_idade'] ?> </td>
                    <td> <a href="editar.php?id_cliente= <?php echo $dados['id_cliente']; ?>" class="btn-floating orange">
                        <i class="material-icons">edit</i>
                    </a></td>
                    <td> <a href="#modal<?php echo $dados['id_cliente']; ?>" class="btn-floating red modal-trigger">
                        <i class="material-icons">delete</i>
                    </a></td>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id_cliente']; ?>" class="modal">
                        <div class="modal-content">
                        <h4>Atenção!!</h4>
                        <p>Tem certeza que deseja remover o registro?</p>
                        </div>
                        <div class="modal-footer">
                        
                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id_cliente']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, tenho certeza</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>

                        </div>
                    </div>

                </tr>
                <?php
                        }
                        mysqli_close($connect);
                    }
                    else {
                        ?>

                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>

</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>