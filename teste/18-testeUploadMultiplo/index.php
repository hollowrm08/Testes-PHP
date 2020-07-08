<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Teste Uploads</title>
</head>
<body>
    <?php 

        if(isset($_POST['enviar-formulario'])){  // se existe o indice do botão submit na variavel global POST
            $formatosPermitidos = array("gif", "jpg", "jpeg", "png", "pdf");
            $quantidadeArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while ($contador < $quantidadeArquivos) {
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
            
                if(in_array($extensao, $formatosPermitidos)){ //extensão encontrada, extensões permitidas
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($temporario, $pasta.$novoNome)){  // arquivo, destino
                        echo "Upload feito com sucesso para $pasta$novoNome <br>";
                    }
                    else {
                        $mensagem = "Erro ao enviar o arquivo $temporario <br>";
                    }
                }
                else {
                    echo "$extensao não é permitida <br>";
                }
                
                $contador++;
            }

            
        }

        

    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" 
        enctype="multipart/form-data" >
        <input type="file" name="arquivo[]" multiple> <br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>
</html>