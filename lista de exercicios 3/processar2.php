<?php

$valores = array();

$negativos = 0;
$positivos =0;
$pares =0;
$impares =0;

for ($i = 1; $i <= 10; $i++) {
    $valor = $_POST["num$i"];
    $valores[$i] = $valor;
}

foreach ($valores as $num) {
    if ($num < 0) {
        $negativos++;
    }
    else if ($num > 0) {
        $positivos++;
    }

    if ($num % 2 == 0) {
        $pares++;
    }
    else if ($num % 2 == 1) {
        $impares++;
    }
}


echo "$negativos Números negativos, $positivos Números positivos, $pares Números pares, $impares Números Impares";