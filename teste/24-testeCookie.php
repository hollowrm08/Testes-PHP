<?php 
    //Cookies

    //(nome do cookie, valor do cookie, validade do cookie+segundos)
    setcookie('user', 'Rodrigo Mello', time()+3600);
    setcookie('email', 'hollowrm08@gmail.com', time()+3600);
    setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

    echo $_COOKIE['email'];


?>