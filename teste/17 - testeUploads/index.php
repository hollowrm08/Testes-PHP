<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Teste Uploads</title>
</head>
<body>
    <?php 

        if(isset($_POST['enviar-formulario'])){  // se existe o indice do botão submit na variavel global POST
            $formatosPermitidos = array("gif", "jpg", "jpeg", "png");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)){ //extensão encontrada, extensões permitidas
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($temporario, $pasta.$novoNome)){  // arquivo, destino
                    $mensagem = "Upload feito com sucesso";
                }
                else {
                    $mensagem = "Erro não foi possível fazer o upload";
                }
            }
            else {
                $mensagem = "Formato Inválido";
            }
        }

        echo $mensagem;

    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" 
        enctype="multipart/form-data" >
        <input type="file" name="arquivo"> <br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>