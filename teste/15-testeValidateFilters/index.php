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

            // Filtros

            //INPUT_POST == tipo de input
            //'idade' == nome do campo
            //FILTER_VALIDATE_INT == filtro


            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
                $erros[] = "idade precisa ser um inteiro";
            }
            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $erros[] = "email inválido";
            }
            if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
                $erros[] = "peso precisa ser um float";
            }
            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
                $erros[] = "ip inválido";
            }
            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
                $erros[] = "url inválida";
            }   

            // Printar erros

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
        Idade: <input type="text" name = "idade"><br>
        Email: <input type="email" name ="email" id=""><br>
        Peso: <input type="text" name = "peso"><br>
        IP: <input type="text" name = "ip"><br>
        URL: <input type="text" name = "url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    
    </form>
</body>
</html>