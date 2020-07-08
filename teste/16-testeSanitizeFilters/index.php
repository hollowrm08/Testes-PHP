<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste post</title>
</head>
<body>
    <?php

        if (isset($_POST['enviar-formulario'])) {
            $erros = array();

            //Sanitize Filters

            //filter_input != filter_var
            //'idade' == nome do campo
            //FILTER_VALIDATE_INT == sanitize

            
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)){
                $erros[] = "Idade precisa ser um inteiro";
            }

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erros[] = "Email inválido";
            }

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                $erros[] = "Url inválida";
            }

            if (!empty($erros)){
                foreach($erros as $value) {
                    echo "<li>$value </li>";
                }
            }
            else {
                echo "Seus dados estão corretos";
                
                
            }
        }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
        Nome: <input type="text" name = "nome"><br>
        Idade: <input type="text" name = "idade"><br>
        Email: <input type="email" name ="email" id=""><br>
        URL: <input type="text" name = "url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    
    </form>
</body>
</html>