<?php

$numero = $_POST['number'];


function calcularFatorial ($numero) {
    $fatorial = 1;
    for($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}

$total = calcularFatorial($numero);

echo "O fatorial do número $numero é $total";