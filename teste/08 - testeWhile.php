<?php

$contador = 0;

while ($contador <= 10) {
    echo "contador vale: ".$contador."<br>";
    $contador++;
}
echo "<hr>";

do {
    echo "contador vale: ".$contador."<br>";
    $contador++;
} while ($contador <= 20);

?>