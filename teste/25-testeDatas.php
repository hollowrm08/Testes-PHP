<?php 

    date_default_timezone_set('America/Sao_Paulo');

    function linha(){
        echo "<hr>";
    }

    echo "retorna o dia: ".date('d');
    linha();

    echo "retorna o dia da semana: ".date('D');
    linha();

    echo "retorna o mes: ".date('m');
    linha();

    echo "retorna o mes por extenso: ".date("M");
    linha();

    echo "retorna o século: ".date('y');
    linha();

    echo "retorna o ano por extenso: ".date('Y');
    linha();

    echo "retorna a data completa: ".date('d/m/Y');
    linha();

    echo "retorna o dia da semana minusculo: ".date('l');
    linha();

    // H -> horas no formato 24h, h -> horas no formato 12h, i -> minutos, s -> segundos, a -> PM ou AM 
    // date('H/i/s')

    //No formato do banco de dados
    // $date = date('Y-m-d'); => date
    // $datetime = date ('Y-m-d H:i:s') => datetime

    //strtotime
    $data = '2019-04-10 13:30:00';
    $data = strtotime($data);

    echo date('d/m/Y', $data);
    linha();

    
?>