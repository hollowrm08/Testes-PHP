<?php
    session_start();

    $_SESSION['jogo'] = "The witcher 3";
    $_SESSION['cor'] = "Preto";

    echo $_SESSION['jogo']."<br>".$_SESSION['cor'];

?>