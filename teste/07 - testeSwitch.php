<?php

$cor = "verde";

switch($cor){
   case "vermelho":
      echo "a cor é vermelho";
      break;
   case "azul" || "verde":
      echo "a cor é azul ou verde";
      break;
    default:
       echo "não sei qual é a cor";
}

?>