<!-- Header -->
    <?php
        include 'header.php'; //Caso não encontre a referência fornece um aviso
        include_once 'header.php'; //O arquivo referenciado pelo '_once' só é incluido se for a primeira 'requisição' no código 
    ?>

    <?php   echo "Olá mundo"; ?>

<!-- Footer -->
    <?php 
        require 'footer.php'; //Caso não encontre a referência fornece um erro
        require_once 'footer.php';
    ?>